<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProfileController,
    UserController,
    ReservationController,
    EventController,
    EventImageController,
    AeronaveController,
    Faqs
};
use App\Http\Controllers\Auth\TwoFactorController;

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

// ::: 2FA :::
Route::get('/two-factor', [TwoFactorController::class, 'index'])
    ->name('2fa.verify');

Route::post('/two-factor', [TwoFactorController::class, 'store'])
    ->name('2fa.store')->middleware('throttle:5,5');

Route::post('/two-factor/resend', [TwoFactorController::class, 'resend'])
    ->name('2fa.resend');

Route::post('/two-factor/cancel', [TwoFactorController::class, 'cancel'])
    ->name('2fa.cancel');

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
    ->name('reservations.cancel')->middleware('auth');

// Calendarios
Route::get('/reservation/calendario', function(){ return view('reservations.calendario'); })->middleware('auth')->name('reservations.calendario');
Route::get('/guia/calendario', function(){ return view('guia.calendario'); })->middleware('auth')->name('guia.calendario');
Route::get('/cliente/calendario', function(){ return view('cliente.calendario'); })->middleware('auth')->name('cliente.calendario');

Route::get('administrador/fullcalendar', [ReservationController::class, 'getAllReservations'])
    ->name('administrador.fullcalendar')
    ->middleware(['auth', 'isAdmin']);

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

//FICHA FARMAN
Route::get('/aeronave/fichas/farman50hp', function () {
    return view('aeronave.fichas.farman50hp');
});

//FICHA De Havilland DH-82A
Route::get('/aeronave/fichas/de_havilland_dh_82a', function () {
    return view('aeronave.fichas.de_havilland_dh_82a');
});

//FICHA fairchild
Route::get('/aeronave/fichas/fairchild_pt-19', function () {
    return view('aeronave.fichas.fairchild_pt-19');
});

//FICHA Stinson 108-3
Route::get('/aeronave/fichas/stinson_108-3', function () {
    return view('aeronave.fichas.stinson_108-3');
});

//FICHA Blériot XI
Route::get('/aeronave/fichas/bleriot_xi', function () {
    return view('aeronave.fichas.bleriot_xi');
});

//FICHA beechcraft_at-11
Route::get('/aeronave/fichas/beechcraft_at-11', function () {
    return view('aeronave.fichas.beechcraft_at-11');
});

//FICHA Curtiss SNC
Route::get('/aeronave/fichas/Curtiss_SNC-1', function () {
    return view('aeronave.fichas.Curtiss_SNC-1');
});

//FICHA North American
Route::get('/aeronave/fichas/north_american_t-6g', function () {
    return view('aeronave.fichas.north_american_t-6g');
});

//FICHA Lockheed F-80C
Route::get('/aeronave/fichas/lockheed_f-80c', function () {
    return view('aeronave.fichas.lockheed_f-80c');
});

//FICHA Lockheed T-33A
Route::get('/aeronave/fichas/lockheed_t-33a', function () {
    return view('aeronave.fichas.lockheed_t-33a');
});

//FICHA bell uh-1b
Route::get('/aeronave/fichas/bell_uh-1b', function () {
    return view('aeronave.fichas.bell_uh-1b');
});

//FICHA Castaibert
Route::get('/aeronave/fichas/castaibert', function () {
    return view('aeronave.fichas.castaibert');
});

//FICHA North American B-25J
Route::get('/aeronave/fichas/north_american_b-25j', function () {
    return view('aeronave.fichas.north_american_b-25j');
});

//FICHA Piper AE-1
Route::get('/aeronave/fichas/piper_ae-1', function () {
    return view('aeronave.fichas.piper_ae-1');
});

//FICHA De Havilland DHC-1
Route::get('/aeronave/fichas/de_havilland_dhc-1', function () {
    return view('aeronave.fichas.de_havilland_dhc-1');
});

//FICHA Beechcraft T-34B
Route::get('/aeronave/fichas/beechcraft_t-34b', function () {
    return view('aeronave.fichas.beechcraft_t-34b');
});

//FICHA North American/ Ryan NA-145
Route::get('/aeronave/fichas/north_american_ryan_na-145', function () {
    return view('aeronave.fichas.north_american_ryan_na-145');
});

//FICHA Grumman S-2G
Route::get('/aeronave/fichas/grumman_s-2g', function () {
    return view('aeronave.fichas.grumman_s-2g');
});

//FICHA MBB (Bolköw)
Route::get('/aeronave/fichas/mbb', function () {
    return view('aeronave.fichas.mbb');
});

//FICHA Westland Wessex
Route::get('/aeronave/fichas/westland_wessex', function () {
    return view('aeronave.fichas.westland_wessex');
});

//FICHA Hiller H-23F
Route::get('/aeronave/fichas/hiller_h-23f', function () {
    return view('aeronave.fichas.hiller_h-23f');
});

//FICHA Curtiss-Wright P-3A
Route::get('/aeronave/fichas/curtiss_wright_p-3a', function () {
    return view('aeronave.fichas.curtiss_wright_p-3a');
});

//FICHA FMA IA-58A
Route::get('/aeronave/fichas/fma_ia-58a', function () {
    return view('aeronave.fichas.fma_ia-58a');
});

//FICHA Cessna T-41D
Route::get('/aeronave/fichas/cessna_t-41d', function () {
    return view('aeronave.fichas.cessna_t-41d');
});

//FICHA Cessna U-17A
Route::get('/aeronave/fichas/cessna_u-17a', function () {
    return view('aeronave.fichas.cessna_u-17a');
});

//FICHA Thompson Bros P505
Route::get('/aeronave/fichas/thomson_bros', function () {
    return view('aeronave.fichas.thomson_bros');
});

//FICHA Embraer EMB-110C (C-95)
Route::get('/aeronave/fichas/embraer_emb-110c', function () {
    return view('aeronave.fichas.embraer_emb-110c');
});

//FICHA LET L-13
Route::get('/aeronave/fichas/let_l-13', function () {
    return view('aeronave.fichas.let_l-13');
});

//FICHA Cessna A-37 B
Route::get('/aeronave/fichas/cessna_a-37_b', function () {
    return view('aeronave.fichas.cessna_a-37_b');
});

//FICHA Douglas C-47
Route::get('/aeronave/fichas/douglas_c-47', function () {
    return view('aeronave.fichas.douglas_c-47');
});

//FICHA Douglas DC-3/C-47
Route::get('/aeronave/fichas/douglas_dc-3-c-47', function () {
    return view('aeronave.fichas.douglas_dc-3-c-47');
});

//FICHA Vickers Viscount
Route::get('/aeronave/fichas/vickers_viscount', function () {
    return view('aeronave.fichas.vickers_viscount');
});

//FICHA North American F-51D
Route::get('/aeronave/fichas/north_american_f-51d', function () {
    return view('aeronave.fichas.north_american_f-51d');
});

//FICHA Ultraliviano
Route::get('/aeronave/fichas/ultraliviano', function () {
    return view('aeronave.fichas.ultraliviano');
});

//FAQS
Route::get('/faqs', [Faqs::class, 'index'])->name('faqs');

// Disponibilidad por fecha y días completamente ocupados
Route::get('reservations/availability', [ReservationController::class, 'availability'])
    ->name('reservations.availability')
    ->middleware('auth');

Route::get('reservations/fully-booked-dates', [ReservationController::class, 'fullyBookedDates'])
    ->name('reservations.fully_booked')
    ->middleware('auth');

require __DIR__.'/auth.php';
