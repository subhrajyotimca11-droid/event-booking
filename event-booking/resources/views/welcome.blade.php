@extends('layouts.welcome')

@section('content')
    {{-- Welcome Navigation --}}
    @include('partials.welcome-nav')

    {{-- Hero Section --}}
    @include('partials.welcome-hero')

    {{-- Features Section --}}
    @include('partials.welcome-features')

    {{-- Footer --}}
    @include('partials.welcome-footer')
@endsection

@push('scripts')
<script>
    // Alpine.js mobile menu is initialized in the welcome-nav partial via x-data
    // No additional script needed here; the x-data attribute handles it.
</script>
@endpush
