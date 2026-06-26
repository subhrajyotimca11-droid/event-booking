@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Available Events</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($events as $event)
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover">
            @endif
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">{{ $event->title }}</h3>
                <p class="text-gray-600 text-sm mb-2">{{ Str::limit($event->description, 100) }}</p>
                <div class="flex justify-between items-center text-sm text-gray-500 mb-2">
                    <span>{{ $event->start_date->format('M d, Y') }}</span>
                    <span>${{ number_format($event->price, 2) }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm {{ $event->isFull() ? 'text-red-500' : 'text-green-500' }}">
                        {{ $event->availableSeats() }} seats available
                    </span>
                    <a href="{{ route('buyer.events.show', $event) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-sm">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $events->links() }}
    </div>
</div>
@endsection