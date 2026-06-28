{{-- resources/views/layouts/welcome.blade.php --}}
{{-- Dedicated layout for the welcome/landing page --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EventBooking') }} - Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600;700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Include custom page styles --}}
        @stack('styles')

        {{-- Global welcome page custom styles --}}
        <style>
            @keyframes blob {
                0% {
                    transform: translate(0px, 0px) scale(1);
                }
                33% {
                    transform: translate(30px, -50px) scale(1.1);
                }
                66% {
                    transform: translate(-20px, 20px) scale(0.9);
                }
                100% {
                    transform: translate(0px, 0px) scale(1);
                }
            }
            .animate-blob {
                animation: blob 7s infinite;
            }
            .animation-delay-2000 {
                animation-delay: 2s;
            }
            .animation-delay-4000 {
                animation-delay: 4s;
            }
            html {
                scroll-behavior: smooth;
            }
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }
            ::-webkit-scrollbar-thumb {
                background: #c7c7c7;
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #a8a8a8;
            }
        </style>
    </head>

    <body class="font-sans antialiased text-gray-900 bg-white">
        {{-- Main Content --}}
        @yield('content')

        {{-- Stack for page-specific scripts --}}
        @stack('scripts')
    </body>
</html>
