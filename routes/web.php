<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\BookingController;

// Booking routes (discovery call)
Route::get('/booking/captcha', [BookingController::class, 'captcha']);
Route::post('/book-discovery', [BookingController::class, 'submit'])->name('book.discovery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Service pages (simple static views)
Route::view('/services/relationship-coaching', 'services.relationship-coaching')->name('services.relationship');
Route::view('/services/couple-dynamics-coaching', 'services.couple-dynamics-coaching')->name('services.couple_dynamics');
Route::view('/services/breakup-separation-support', 'services.breakup-separation-support')->name('services.breakup_support');
Route::view('/services/separation-coaching', 'services.separation-coaching')->name('services.separation');
Route::view('/services/emotional-intelligence-coaching', 'services.emotional-intelligence-coaching')->name('services.emotional_intelligence');
Route::view('/services/workshops-talks', 'services.workshops-talks')->name('services.workshops');
