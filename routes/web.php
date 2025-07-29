<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Routes publiques
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');
Route::get('/about', [PagesController::class, 'about'])->name('pages.propos');
Route::get('/service', [PagesController::class, 'service'])->name('pages.service');
Route::get('/blog', [PagesController::class, 'blog'])->name('pages.blog');
Route::get('/detail', [PagesController::class, 'detail'])->name('pages.detail');
Route::get('/price', [PagesController::class, 'price'])->name('pages.price');
Route::get('/feature', [PagesController::class, 'feature'])->name('pages.feature');
Route::get('/team', [PagesController::class, 'team'])->name('pages.team');
Route::get('/testimonial', [PagesController::class, 'testimonial'])->name('pages.testimonial');
Route::get('/quote', [PagesController::class, 'quote'])->name('pages.quote');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');

// Routes authentifiées (client)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
    Route::resource('bookings', BookingController::class)->only(['index', 'store', 'show']);
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
});

// Routes admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('properties', PropertyController::class);
    Route::resource('cars', CarController::class);
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
});

// Routes d'authentification
require __DIR__.'/auth.php';