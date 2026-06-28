{{-- resources/views/partials/welcome-hero.blade.php --}}
{{-- Modern hero banner section for the welcome page --}}
<section id="home" class="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden">
    {{-- Gradient Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-purple-50 -z-10"></div>

    {{-- Decorative Blobs --}}
    <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Content --}}
            <div class="text-center lg:text-left max-w-2xl mx-auto lg:mx-0">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight tracking-tight">
                    Book Amazing <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Events</span>
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-600 leading-relaxed">
                    Discover concerts, conferences, workshops and more. Find and book the perfect event tailored just for you.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#events" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 hover:from-indigo-700 hover:to-purple-700">
                        Browse Events
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-indigo-700 bg-white border-2 border-indigo-200 rounded-xl hover:border-indigo-400 hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                        Register Now
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Illustration / Image Placeholder --}}
            <div class="relative mx-auto lg:ml-auto w-full max-w-lg lg:max-w-xl">
                <div class="relative">
                    {{-- Main Image Placeholder Card --}}
                    <div class="bg-white rounded-3xl shadow-2xl p-6 transform rotate-2 hover:rotate-0 transition-transform duration-500">
                        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-8 text-white">
                            {{-- Calendar Icon --}}
                            <div class="flex items-center justify-between mb-6">
                                <div class="bg-white/20 backdrop-blur-sm rounded-xl px-4 py-2">
                                    <span class="text-2xl font-bold">28</span>
                                    <span class="text-sm block text-center">Jun</span>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-xl px-4 py-2">
                                    <span class="text-sm font-medium">Music Festival</span>
                                </div>
                            </div>

                            {{-- Event Image Placeholder --}}
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl h-48 flex items-center justify-center border-2 border-dashed border-white/30">
                                <div class="text-center">
                                    <svg class="w-16 h-16 mx-auto text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    <p class="mt-2 text-sm text-white/80">Event Image</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Badge --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
                        <div class="bg-green-100 rounded-full p-2">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Booking Confirmed!</p>
                            <p class="text-xs text-gray-500">2 minutes ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
