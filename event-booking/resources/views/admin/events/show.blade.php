@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">{{ $event->title }}</h1>
        <a href="{{ route('admin.events.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Back to Events
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @if($event->image)
                <div>
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full rounded">
                </div>
            @endif

            <div>
                <h3 class="font-bold mb-2">Event Details</h3>
                <p><strong>Date:</strong> {{ $event->start_date->format('M d, Y H:i') }} - {{ $event->end_date->format('M d, Y H:i') }}</p>
                <p><strong>Location:</strong> {{ $event->location }}</p>
                <p><strong>Price:</strong> ${{ number_format($event->price, 2) }}</p>
                <p><strong>Total Capacity:</strong> {{ $event->capacity }}</p>
                <p><strong>Available Seats:</strong> {{ $event->availableSeats() }}</p>
                <p><strong>Status:</strong> {{ $event->is_active ? 'Active' : 'Inactive' }}</p>
            </div>
        </div>

        @if($event->description)
            <div class="mt-4">
                <h3 class="font-bold mb-2">Description</h3>
                <p>{{ $event->description }}</p>
            </div>
        @endif
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Bookings ({{ $bookings->total() }})</h2>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Buyer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Quantity</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($bookings as $booking)
                <tr>
                    <td class="px-6 py-4">{{ $booking->user->name }}</td>
                    <td class="px-6 py-4">{{ $booking->quantity }}</td>
                    <td class="px-6 py-4">${{ number_format($booking->total_price, 2) }}</td>
                    <td class="px-6 py-4">{{ ucfirst($booking->status) }}</td>
                    <td class="px-6 py-4">{{ $booking->created_at->format('M d, Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $bookings->links() }}
        </div>
    </div>
</div>
@endsection