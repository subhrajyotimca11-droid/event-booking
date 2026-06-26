<?php

use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Buyer\BookingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->hasRole('admin')) {
        return redirect()->route('admin.events.index');
    }
    return redirect()->route('buyer.events.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        $events = \App\Models\Event::latest()->paginate(10);
        return view('admin.dashboard', compact('events'));
    })->name('dashboard');
    Route::resource('events', AdminEventController::class);
});

// Buyer Routes
Route::prefix('buyer')->name('buyer.')->middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('bookings/create/{event}', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('bookings/{event}', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
});

// Payment Routes
Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/checkout/{event}', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/payment/success/{booking}', [PaymentController::class, 'success'])->name('payment.success');
    Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
});

Route::post('/webhook/stripe', [PaymentController::class, 'webhook'])->name('webhook.stripe');

require __DIR__.'/auth.php';
