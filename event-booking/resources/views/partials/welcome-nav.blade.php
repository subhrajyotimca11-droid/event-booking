{{-- resources/views/partials/welcome-nav.blade.php --}}
{{-- Reusable top navigation bar for the welcome/landing page --}}
<nav x-data="{ mobileMenuOpen: false }" class="bg-white/80 backdrop-blur-md shadow-sm fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <div class="flex items-center gap-2">
                <x-application-logo class="block h-8 w-auto text-indigo-600" />
                <span class="font-bold text-xl text-gray-800">{{ config('app.name', 'EventBooking') }}</span>
            </div>

            {{-- Desktop Navigation Links --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-200">Home</a>
                <a href="#events" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-200">Events</a>
                <a href="#about" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-200">About</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors duration-200">Contact</a>
            </div>

            {{-- Auth Buttons (Desktop) --}}
            <div class="hidden md:flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 transition-colors duration-200"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="px-4 py-2 text-sm font-medium text-indigo-600 hover:text-indigo-700 border border-indigo-600 rounded-lg transition-all duration-200 hover:shadow-md"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 hover:from-indigo-700 hover:to-purple-700">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden flex items-center">
                <button
                    @click="mobileMenuOpen = ! mobileMenuOpen"
                    type="button"
                    class="text-gray-700 hover:text-indigo-600 focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    {{-- Hamburger Icon --}}
                    <svg
                        x-show="! mobileMenuOpen"
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    {{-- Close Icon --}}
                    <svg
                        x-show="mobileMenuOpen"
                        class="h-6 w-6 hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation Menu --}}
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-gray-100 shadow-lg"
    >
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="#home" class="block px-3 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-200">Home</a>
            <a href="#events" class="block px-3 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-200">Events</a>
            <a href="#about" class="block px-3 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-200">About</a>
            <a href="#contact" class="block px-3 py-3 rounded-lg text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-200">Contact</a>
            <div class="mt-4 pt-4 border-t border-gray-100 space-y-2">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block w-full text-center px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:text-indigo-600 border border-gray-200 hover:border-indigo-300 transition-colors duration-200">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="block w-full text-center px-4 py-3 rounded-lg text-sm font-medium text-indigo-600 border border-indigo-600 hover:bg-indigo-50 transition-colors duration-200">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block w-full text-center px-4 py-3 rounded-lg text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 shadow-md transition-all duration-200">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>
