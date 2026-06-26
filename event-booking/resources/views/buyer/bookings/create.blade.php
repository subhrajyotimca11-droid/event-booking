@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-4">
        <a href="{{ route('buyer.events.show', $event) }}" class="text-blue-500 hover:text-blue-700">&larr; Back to Event</a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Book: {{ $event->title }}</h1>

        <div class="mb-4 p-4 bg-gray-50 rounded">
            <p><strong>Price per ticket:</strong> ${{ number_format($event->price, 2) }}</p>
            <p><strong>Available seats:</strong> {{ $event->availableSeats() }}</p>
        </div>

        <form action="{{ route('buyer.bookings.store', $event) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
                <select name="quantity" class="w-full border rounded px-3 py-2" required>
                    @for($i = 1; $i <= $event->availableSeats(); $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-4">
                <p class="text-lg font-bold">Total: $<span id="total">{{ number_format($event->price, 2) }}</span></p>
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full">
                Proceed to Payment
            </button>
        </form>
    </div>
</div>

<script>
    document.querySelector('select[name="quantity"]').addEventListener('change', function() {
        var price = {{ $event->price }};
        var quantity = this.value;
        document.getElementById('total').textContent = (price * quantity).toFixed(2);
    });
</script>
@endsection