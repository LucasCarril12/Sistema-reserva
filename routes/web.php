<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('usuarios', UserController::class);

Route::get('/reservation/calendario', function(){
    return view('reservations.calendario');
})->name('reservations.calendario');

Route::get('administrador/fullcalendar',[ReservationController::class, 'getAllReservations'])->name('administrador.fullcalendar');
Route::get('reservations/fullcalendar', [ReservationController::class, 'getAllReservations'])->name('reservations.fullcalendar');

Route::resource('reservations', ReservationController::class)->except(['show']);
Route::post('/reservations/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');
Route::get('/guia/calendario',function(){
    return view('guia.calendario');
})->name('guia.calendario');

Route::get('guia/fullcalendar',[ReservationController::class, 'getAllReservations'])->name('guia.fullcalendar');

Route::get('cliente/reservas', [ReservationController::class, 'indexCliente'])->name('cliente.reservas');
Route::get('cliente/reserva', [ReservationController::class, 'createCliente'])->name('cliente.reserva');
Route::post('cliente/reserva', [ReservationController::class, 'storeCliente'])->name('cliente.reserva.store');
Route::get('/cliente/calendario',function(){
    return view('cliente.calendario');
})->name('cliente.calendario');

Route::get('guia/fullcalendar',[ReservationController::class, 'getAllReservationsCliente'])->name('cliente.fullcalendar');

Route::post('/cliente/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');

require __DIR__.'/auth.php';
