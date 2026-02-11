<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProfileController,
    UserController,
    ReservationController,
    EventController,
    EventImageController,
    AeronaveController
};

// Home pública
Route::get('/', [EventController::class, 'publicIndex'])->name('welcome');

// Dashboard
Route::get('/dashboard', fn () => view('dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Usuarios
Route::resource('usuarios', UserController::class)->middleware('auth');

// Eventos
Route::resource('events', EventController::class)->middleware('auth');
//Borrar eventos
Route::delete(
    '/event-images/{image}',
    [EventController::class, 'destroyImage']
)->name('events.images.destroy');


// Reservas
Route::resource('reservations', ReservationController::class)
    ->except(['show'])
    ->middleware('auth');

Route::post('/reservations/cancel', [ReservationController::class, 'cancel'])
    ->name('reservations.cancel');

// Calendarios
Route::get('/reservation/calendario', function(){ return view('reservations.calendario'); })->middleware('auth')->name('reservations.calendario');
Route::get('/guia/calendario', function(){ return view('guia.calendario'); })->middleware('auth')->name('guia.calendario');
Route::get('/cliente/calendario', function(){ return view('cliente.calendario'); })->middleware('auth')->name('cliente.calendario');

Route::get('administrador/fullcalendar', [ReservationController::class, 'getAllReservations'])
    ->name('administrador.fullcalendar')
    ->middleware('auth');

Route::get('guia/fullcalendar', [ReservationController::class, 'getAllReservations'])
    ->name('guia.fullcalendar')
    ->middleware('auth');

Route::get('cliente/fullcalendar', [ReservationController::class, 'getAllReservationsCliente'])
    ->name('cliente.fullcalendar')
    ->middleware('auth');

// Cliente
Route::get('cliente/reservas', [ReservationController::class, 'indexCliente'])
    ->name('cliente.reservas');

Route::get('cliente/reserva', [ReservationController::class, 'createCliente'])
    ->name('cliente.reserva');

Route::post('cliente/reserva', [ReservationController::class, 'storeCliente'])
    ->name('cliente.reserva.store');

//Aeronaves
Route::get('/aeronaves', [AeronaveController::class, 'index'])->name('aeronaves.index');


// Disponibilidad por fecha y días completamente ocupados
Route::get('reservations/availability', [ReservationController::class, 'availability'])
    ->name('reservations.availability')
    ->middleware('auth');

Route::get('reservations/fully-booked-dates', [ReservationController::class, 'fullyBookedDates'])
    ->name('reservations.fully_booked')
    ->middleware('auth');

require __DIR__.'/auth.php';
