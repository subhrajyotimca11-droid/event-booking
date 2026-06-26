<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())
            ->with('event')
            ->latest()
            ->paginate(10);
        return view('buyer.bookings.index', compact('bookings'));
    }

    public function create(Event $event)
    {
        if ($event->isFull() || !$event->is_active || $event->start_date < now()) {
            return redirect()->route('buyer.events.index')
                ->with('error', 'This event is not available for booking.');
        }

        return view('buyer.bookings.create', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        if ($event->isFull() || !$event->is_active || $event->start_date < now()) {
            return redirect()->route('buyer.events.index')
                ->with('error', 'This event is not available for booking.');
        }

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $event->availableSeats(),
        ]);

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'event_id' => $event->id,
            'quantity' => $validated['quantity'],
            'total_price' => $event->price * $validated['quantity'],
            'status' => 'pending',
        ]);

        return redirect()->route('checkout', $event);
    }

    public function destroy(Booking $booking)
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        if ($booking->status === 'confirmed') {
            $booking->cancel();
        } else {
            $booking->delete();
        }

        return redirect()->route('buyer.bookings.index')->with('success', 'Booking cancelled successfully.');
    }
}