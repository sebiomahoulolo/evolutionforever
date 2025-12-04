
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
use App\Http\Controllers\DevisController;
use App\Http\Controllers\PressingController;
use App\Http\Controllers\DemenagementController;
use App\Http\Controllers\SobebraController;
use App\Http\Controllers\EventReservationController;


// Route pour la page événements
Route::get('/evenments', [PagesController::class, 'evenments'])->name('pages.evenments');

// Routes pour les réservations d'événements
Route::post('/event-reserve', [EventReservationController::class, 'store'])
    ->name('event.reserve.store');

// Routes admin pour gérer les réservations
Route::prefix('admin')->group(function () {
    Route::get('/event-reservations', [EventReservationController::class, 'index'])
        ->name('admin.event.reservations.index');
        
    Route::get('/event-reservations/{id}', [EventReservationController::class, 'show'])
        ->name('admin.event.reservations.show');
        
    Route::delete('/event-reservations/{id}', [EventReservationController::class, 'destroy'])
        ->name('admin.event.reservations.destroy');
});


// Route de réservation publique
Route::post('/reservation', [\App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('reservation.store');
use App\Http\Controllers\EventController;
// Routes publiques
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');
Route::get('/about', [PagesController::class, 'about'])->name('pages.propos');
Route::get('/service', [PagesController::class, 'service'])->name('pages.service');
Route::get('/immo', [PagesController::class, 'immo'])->name('pages.immo');
Route::get('/immobilier', [PagesController::class, 'immobilier'])->name('pages.immobilier');
Route::get('/detail', [PagesController::class, 'detail'])->name('pages.detail');
Route::get('/price', [PagesController::class, 'price'])->name('pages.price');
use App\Http\Controllers\VehiculeController;
Route::get('/vehicule', [VehiculeController::class, 'index'])->name('vehicule.index');
Route::get('/vehicule/{id}', [VehiculeController::class, 'show'])->name('vehicule.details');
Route::post('/vehicule/reservation', [VehiculeController::class, 'reservation'])->name('reservation.vehicule');
Route::get('/voiture', [PagesController::class, 'voiture'])->name('pages.voiture');
Route::get('/evenments', [PagesController::class, 'evenments'])->name('pages.evenments');

Route::get('/testimonial', [PagesController::class, 'testimonial'])->name('pages.testimonial');
Route::get('/quote', [PagesController::class, 'quote'])->name('pages.quote');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/about', [PagesController::class, 'about'])->name('pages.propos');
Route::get('/pressing', [PagesController::class, 'pressing'])->name('pages.pressing');
Route::get('/demenagement', [PagesController::class, 'demenagement'])->name('pages.demenagement');
Route::get('/produit', [PagesController::class, 'produit'])->name('pages.produit');
Route::get('/blog', [PagesController::class, 'blog'])->name('pages.blog');
Route::get('/bien-detail/{id}', [PagesController::class, 'bienDetail'])->name('pages.bien-detail');



// Route pour soumettre le formulaire
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');
Route::post('/pressing', [PressingController::class, 'store'])->name('pressing.store');
Route::post('/sobebra', [SobebraController::class, 'store'])->name('sobebra.store');
Route::post('/demenagement', [DemenagementController::class, 'store'])->name('demenagement.store');



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
Route::get('bookings/immo', [BookingController::class, 'immo'])->name('bookings.immo');

    // Réservations immobilières
 Route::get('reservations', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('reservations.index');
 Route::get('pressing/get_pressing', [\App\Http\Controllers\Admin\PressingController::class, 'index'])->name('pressing.get_pressing');
 Route::get('demenagement/get_demenage', [\App\Http\Controllers\Admin\DemenagementController::class, 'index'])->name('demenagement.get_demenage');
 Route::get('sobebra/get_sobebra', [\App\Http\Controllers\Admin\SobebraController::class, 'index'])->name('sobebra.get_sobebra');
 Route::get('cars/get_reservations', [\App\Http\Controllers\Admin\VehiculeController::class, 'index'])->name('cars.get_reservations');
 Route::get('events/get_events', [\App\Http\Controllers\Admin\EventsController::class, 'index'])->name('admin.events.get_events');


Route::get('/admin/events', [App\Http\Controllers\Admin\EventsController::class, 'index'])
    ->name('admin.events.index');
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
