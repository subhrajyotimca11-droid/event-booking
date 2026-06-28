{{-- resources/views/partials/welcome-footer.blade.php --}}
{{-- Reusable footer for the welcome page --}}
<footer id="contact" class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-12">
            {{-- Brand Column --}}
            <div class="md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <x-application-logo class="block h-8 w-auto text-white" />
                    <span class="font-bold text-xl">{{ config('app.name', 'EventBooking') }}</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Your trusted platform for discovering and booking amazing events. Making memories, one event at a time.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#home" class="text-gray-400 hover:text-white transition-colors duration-200">Home</a></li>
                    <li><a href="#events" class="text-gray-400 hover:text-white transition-colors duration-200">Events</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition-colors duration-200">About</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-200">Contact</a></li>
                </ul>
            </div>

            {{-- Support --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">Support</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Help Center</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">FAQs</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">Get in Touch</h4>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>support@eventbooking.com</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>123 Event Street, City, Country</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'EventBooking') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
