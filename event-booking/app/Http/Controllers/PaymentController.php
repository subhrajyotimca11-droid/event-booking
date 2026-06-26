<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Webhook;

class PaymentController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function checkout(Event $event)
    {
        $pendingBooking = Booking::where('user_id', auth()->id())
            ->where('event_id', $event->id)
            ->where('status', 'pending')
            ->first();

        if (!$pendingBooking) {
            return redirect()->route('buyer.events.show', $event)
                ->with('error', 'No pending booking found. Please book again.');
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $event->title,
                        'description' => $event->description,
                    ],
                    'unit_amount' => (int)($event->price * 100),
                ],
                'quantity' => $pendingBooking->quantity,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', $pendingBooking) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel'),
            'metadata' => [
                'booking_id' => $pendingBooking->id,
            ],
        ]);

        $pendingBooking->update(['payment_intent_id' => $session->id]);

        return redirect()->away($session->url);
    }

    public function success(Booking $booking)
    {
        $session_id = request('session_id');

        if ($session_id && $booking->payment_intent_id === $session_id) {
            $booking->update(['status' => 'confirmed']);
        }

        return view('buyer.payment.success', compact('booking'));
    }

    public function cancel()
    {
        return view('buyer.payment.cancel');
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('stripe-signature');
        $secret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent($payload, $sig_header, $secret);
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;
                $booking = Booking::where('payment_intent_id', $session->id)->first();
                if ($booking && $booking->status === 'pending') {
                    $booking->update(['status' => 'confirmed']);
                }
                break;
        }

        return response()->json(['status' => 'success']);
    }
}