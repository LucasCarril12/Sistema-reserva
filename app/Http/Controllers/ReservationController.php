<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//llamamos a nuestr modelo user y reservation
use App\Models\User;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtener todas las reservas con relacion usuario y guia
        $reservations = Reservation::with(['user','consultant'])->get();
        return view('reservations.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //filtramos usuarios y los almacenamos en una variable
        $users = User::where('rol_id',3)->whereNull('deleted_at')->get(); //muestra a todos los usuarios activos para poder generar reserva

        $consultans = User::where('rol_id',2)->whereNull('deleted_at')->get(); //Musetra a las guias activas

        return view('reservations.create',compact('users', 'consultans'));
    }

    /**
     *  Store es el metodo para registrar en la Base de Datos.
     */
    public function store(Request $request)
    {
        // validamos los datos enviados por el formulario
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'consulta_id' => 'required|exists:users,id',
            'reservation_date' => 'required|date',
            'start_time' => 'required|date_format:H:i|after_or_equal:08:00|before_or_equal:16:00',
            'end_time' => 'required|date_format:H:i|before_or_equal:16:00',
            'reservation_status' => 'required|in:pendiente,confirmada,cancelada',
            // si mantenés payment_status en la tabla:
            'payment_status' => 'required|in:pendiente,pago,fallido',
        ]);

        // Asegurate de tener estos campos en $fillable dentro de App\Models\Reservation
        $reservation = Reservation::create([
            'user_id' => $request->user_id,
            'consulta_id' => $request->consulta_id,
            'reservation_date' => $request->reservation_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'reservation_status' => $request->reservation_status,
            'payment_status' => $request->payment_status,
        ]);

        // redirigimos al index de reservations (plural) y usamos with() correctamente
        return redirect()->route('reservations.index')->with('success', '¡Reserva creada correctamente!');
    }



}
