@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-4">
        <a href="{{ route('buyer.events.index') }}" class="text-blue-500 hover:text-blue-700">&larr; Back to Events</a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @if($event->image)
                <div>
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full rounded">
                </div>
            @endif

            <div>
                <h1 class="text-3xl font-bold mb-2">{{ $event->title }}</h1>
                <p class="text-gray-600 mb-4">{{ $event->location }}</p>
                <div class="space-y-2">
                    <p><strong>Date:</strong> {{ $event->start_date->format('M d, Y H:i') }} - {{ $event->end_date->format('M d, Y H:i') }}</p>
                    <p><strong>Price per ticket:</strong> ${{ number_format($event->price, 2) }}</p>
                    <p><strong>Available seats:</strong> {{ $event->availableSeats() }}</p>
                    <p><strong>Status:</strong> {{ $event->is_active ? 'Available' : 'Not Available' }}</p>
                </div>
            </div>
        </div>

        @if($event->description)
            <div class="mt-6">
                <h3 class="font-bold text-lg mb-2">Description</h3>
                <p>{{ $event->description }}</p>
            </div>
        @endif

        @if(!$event->isFull() && $event->is_active && $event->start_date > now())
            <div class="mt-6 pt-6 border-t">
                <a href="{{ route('buyer.bookings.create', $event) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Book Now
                </a>
            </div>
        @else
            <div class="mt-6 pt-6 border-t">
                <span class="text-red-500 font-bold">This event is currently not available for booking.</span>
            </div>
        @endif
    </div>
</div>
@endsection