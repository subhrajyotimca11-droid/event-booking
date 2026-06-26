<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'capacity',
        'price',
        'location',
        'image',
        'is_active',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function availableSeats(): int
    {
        $booked = $this->bookings()->where('status', 'confirmed')->sum('quantity');
        return max(0, $this->capacity - $booked);
    }

    public function isFull(): bool
    {
        return $this->availableSeats() <= 0;
    }
}