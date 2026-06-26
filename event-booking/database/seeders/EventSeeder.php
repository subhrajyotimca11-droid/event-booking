<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Laravel Conference 2026',
            'description' => 'Join us for the biggest Laravel conference of the year',
            'start_date' => now()->addDays(30),
            'end_date' => now()->addDays(30)->addHours(8),
            'capacity' => 200,
            'price' => 150.00,
            'location' => 'Convention Center, New York',
            'is_active' => true,
        ]);

        Event::create([
            'title' => 'Vue.js Workshop',
            'description' => 'Hands-on workshop for Vue.js beginners',
            'start_date' => now()->addDays(15),
            'end_date' => now()->addDays(15)->addHours(4),
            'capacity' => 50,
            'price' => 75.00,
            'location' => 'Tech Hub, San Francisco',
            'is_active' => true,
        ]);

        Event::create([
            'title' => 'Web Development Bootcamp',
            'description' => 'Intensive 3-day bootcamp for aspiring developers',
            'start_date' => now()->addDays(45),
            'end_date' => now()->addDays(47)->addHours(12),
            'capacity' => 100,
            'price' => 299.00,
            'location' => 'Online Event',
            'is_active' => true,
        ]);
    }
}