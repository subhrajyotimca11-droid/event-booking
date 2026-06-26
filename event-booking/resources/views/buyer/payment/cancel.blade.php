@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6 text-center">
        <h1 class="text-2xl font-bold mb-4">Payment Cancelled</h1>
        <p class="text-gray-600 mb-4">Your booking has been cancelled. No payment was processed.</p>
        <a href="{{ route('buyer.events.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Browse Other Events
        </a>
    </div>
</div>
@endsection