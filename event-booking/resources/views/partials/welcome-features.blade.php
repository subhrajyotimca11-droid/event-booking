{{-- resources/views/partials/welcome-features.blade.php --}}
{{-- Reusable features section with three cards --}}
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Why Choose <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Us</span>
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                We make event booking simple, secure, and seamless. Experience the best platform for discovering and booking amazing events.
            </p>
        </div>

        {{-- Features Grid --}}
        <div class="grid md:grid-cols-3 gap-8">
            {{-- Feature Card 1: Easy Booking --}}
            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-indigo-100 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative">
                    <div class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Easy Booking</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Browse events by category, date, or location. Book your tickets in just a few clicks with our intuitive interface.
                    </p>
                </div>
            </div>

            {{-- Feature Card 2: Secure Payments --}}
            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-indigo-100 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative">
                    <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Secure Payments</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Your transactions are protected with bank-level encryption. We support multiple payment methods for your convenience.
                    </p>
                </div>
            </div>

            {{-- Feature Card 3: Instant Confirmation --}}
            <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-indigo-100 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-50 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative">
                    <div class="w-14 h-14 bg-pink-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Instant Confirmation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Receive immediate booking confirmations and e-tickets via email. No waiting, no hassle—just instant access to your events.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
