<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController; 
use App\Http\Controllers\BienImmoController;
use App\Http\Controllers\EventController;
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

// Routes client (authentifié et vérifié)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('dashboard');
    Route::resource('bookings', BookingController::class)->only(['index', 'store', 'show']);
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
});

// Routes admin (authentifié + middleware personnalisé)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('properties', PropertyController::class);
    Route::resource('cars', CarController::class);
    Route::resource('bienimmos', BienImmoController::class);
    Route::resource('events', EventController::class);

    // Add missing bookings.immo route for admin
    Route::get('bookings/immo', [BookingController::class, 'immo'])->name('bookings.immo');

});

Route::middleware(['auth', \App\Http\Middleware\EnsureIsAdmin::class]) // Référence directe
     ->prefix('admin')
     ->group(function () {
         Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
         Route::get('/vehicules', [App\Http\Controllers\Admin\VehiculeController::class, 'index'])->name('admin.vehicules');
         // La ressource bienimmos gère toutes les routes nécessaires
        });

     // routes/web.php
Route::middleware(['auth'])->group(function () {
    // ... vos autres routes ...
    
    // Ajoutez ces routes pour le profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Routes d'authentification Laravel Breeze/Fortify/etc.
require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('cars/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
});
