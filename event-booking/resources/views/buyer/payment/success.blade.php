@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 text-center">
        <h1 class="text-2xl font-bold mb-4 text-green-600">Payment Successful!</h1>
        <p class="text-gray-600 mb-4">Your booking for <strong>{{ $booking->event->title }}</strong> has been confirmed.</p>

        <div class="bg-gray-50 p-4 rounded mb-4">
            <h3 class="font-bold mb-2">Booking Details</h3>
            <p><strong>Event:</strong> {{ $booking->event->title }}</p>
            <p><strong>Date:</strong> {{ $booking->event->start_date->format('M d, Y H:i') }}</p>
            <p><strong>Quantity:</strong> {{ $booking->quantity }}</p>
            <p><strong>Total Paid:</strong> ${{ number_format($booking->total_price, 2) }}</p>
        </div>

        <a href="{{ route('buyer.bookings.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
            View My Bookings
        </a>
        <a href="{{ route('buyer.events.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Browse More Events
        </a>
    </div>
</div>
@endsection