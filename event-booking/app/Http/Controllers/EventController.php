<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('is_active', true)
            ->where('start_date', '>', now())
            ->latest()
            ->paginate(10);
        return view('buyer.events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('buyer.events.show', compact('event'));
    }
}