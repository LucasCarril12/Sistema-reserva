<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


//llamamos a nuestr modelo user y reservation
use App\Models\User;
use App\Models\Reservation;
use App\Models\ReservationDetail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;


class ReservationController extends Controller
{
    /**
     * Time slots available for reservations.
     * Keep in sync with the view select options.
     */
    protected $timeSlots = ['08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00'];

    /**
     * Display a listing of the resource.
     */
    public function index(){
        //obtener todas las reservas con relacion usuario , guia y detalles
        $reservations = Reservation::with(['user','consultant','detail'])->get();
        return view('reservations.index',compact('reservations'));
    }

    public function indexCliente(){
        $userId = Auth::id();

        $reservations = Reservation::where('user_id', $userId)
            ->whereIn('reservation_status', ['pendiente', 'confirmada','realizada'])
            ->with(['detail','user'])
            ->orderBy('reservation_date', 'desc')
            ->get();

        return view('cliente.index', compact('reservations'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //obtenemos todos los usuarios no eliminados
        $users = User::whereNull('deleted_at')->get(); //muestra a todos los usuarios activos para poder generar reserva

        //Muestra a las guias activas (rol_id = 2)
        $consultants = User::where('rol_id',2)
            ->whereNull('deleted_at')
            ->get();

        return view('reservations.create',compact('users', 'consultants'));
    }

    public function createCliente(){
        //Muestra a las guias activas (rol_id = 2)
        $consultants = User::where('rol_id',2)
            ->whereNull('deleted_at')
            ->get();

        return view('cliente.reserva',compact('consultants'));
    }

    /**
     *  Store es el metodo para registrar en la Base de Datos.
     */
    public function store(Request $request){
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'nombre_responsable' => 'required|string',
            'ci' => 'required|string',
            'email' => 'nullable|email',
            'telefono' => 'required|string',
            'telefono2' => 'nullable|string',

            'institucion' => 'required|string',
            'reservation_date' => 'required|date',
            'sala' => 'required|string',
            'start_time' => 'required',

            'direccion' => 'required|string',
            'locomocion' => 'required|string',

            'requerimientos' => 'nullable|string',
            'total_ninios' => 'required|numeric',
            'total_adultos' => 'required|numeric',
            'edad' => 'required|string',
            'extranjero' => 'required|string',
            'obs' => 'nullable|string',

            'reservation_status' => 'required|in:pendiente,cancelada,confirmada,realizada',
        ]);

        // Verificar que no haya más de 2 reservas para la misma fecha y hora
        $existingCount = Reservation::where('reservation_date', $request->reservation_date)
        ->where('start_time', $request->start_time)
        ->whereIn('reservation_status', ['pendiente', 'confirmada'])
        ->count();

        if ($existingCount >= 2) {
            return back()
                ->withErrors(['start_time' => 'Horario completo, por favor elija otro horario'])
                ->withInput();
        }


        // Guardar los datos en reservation
        $reservation = Reservation::create([
            'user_id' => $request->user_id ?: null,
            'reservation_date' => $request->reservation_date,
            'start_time' => $request->start_time,
            'reservation_status' => $request->reservation_status,
            'institucion' => $request->institucion,
        ]);

        // Guardar los detalles en reservation_details
        ReservationDetail::create([
            'reservation_id' => $reservation->id,
            'nombre_responsable' => $request->nombre_responsable,
            'ci' => $request->ci,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'telefono2' => $request->telefono2,
            'sala' => $request->sala,
            'direccion' => $request->direccion,
            'locomocion' => $request->locomocion,
            'requerimientos' => $request->requerimientos,
            'total_ninios' => $request->total_ninios,
            'total_adultos' => $request->total_adultos,
            'edad' => $request->edad,
            'extranjero' => $request->extranjero,
            'obs' => $request->obs,
        ]);

        $this->sendConfirmationEmail($reservation);

        return redirect()->route('reservations.index')->with('success_reservation', '¡Reserva creada correctamente!');
    }

    public function storeCliente(Request $request){
        $request->validate([
            'nombre_responsable' => 'required|string',
            'ci' => 'required|string',
            'email' => 'nullable|email',
            'telefono' => 'required|string',
            'telefono2' => 'nullable|string',

            'institucion' => 'required|string',
            'reservation_date' => 'required|date',
            'sala' => 'required|string',
            'start_time' => 'required',

            'direccion' => 'required|string',
            'locomocion' => 'required|string',

            'requerimientos' => 'nullable|string',
            'total_ninios' => 'required|numeric',
            'total_adultos' => 'required|numeric',
            'edad' => 'required|string',
            'extranjero' => 'required|string',
            'obs' => 'nullable|string',
        ]);

        // Verificar que no haya más de 2 reservas para la misma fecha y hora
        $existingCount = Reservation::where('reservation_date', $request->reservation_date)
            ->where('start_time', $request->start_time)
            ->where('reservation_status', '!=', 'cancelada')
            ->count();

        if ($existingCount >= 2) {
            return back()->withErrors(['start_time' => 'Horario completo, por favor elija otro horario'])->withInput();
        }

        // 🔒 El cliente SIEMPRE es el usuario logueado
        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'reservation_date' => $request->reservation_date,
            'start_time' => $request->start_time,
            'reservation_status' => 'pendiente',
            'institucion' => $request->institucion,
        ]);

        ReservationDetail::create([
            'reservation_id' => $reservation->id,

            'nombre_responsable' => $request->nombre_responsable,
            'ci' => $request->ci,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'telefono2' => $request->telefono2,

            'sala' => $request->sala,
            'direccion' => $request->direccion,
            'locomocion' => $request->locomocion,

            'requerimientos' => $request->requerimientos,
            'total_ninios' => $request->total_ninios,
            'total_adultos' => $request->total_adultos,
            'edad' => $request->edad,
            'extranjero' => $request->extranjero,
            'obs' => $request->obs,
        ]);

        $this->sendConfirmationEmail($reservation);

        return redirect()->route('cliente.reservas')->with('success_reservation', '¡Reserva enviada correctamente! Quedó pendiente de confirmación.');

    }



    // Edit seccion
    public function edit(string $id){
        $reservation = Reservation::findOrFail($id);

        // Solo bloquear si es un cliente (rol_id = 3)
        if (Auth::user()->rol_id === 3 && $reservation->user_id !== Auth::id()) {
            abort(403, 'No tenés permiso para editar esta reserva.');
        }
        $reservation->start_time = Carbon::parse($reservation->start_time)->format('H:i');

        $users = User::where('rol_id',3)
            ->whereNull('deleted_at')
            ->get();
        $consultants = User::where('rol_id',2)
            ->whereNull('deleted_at')
            ->get();
            return view('reservations.edit', compact('reservation', 'users', 'consultants'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'nombre_responsable' => 'required|string',
            'ci' => 'required|string',
            'email' => 'nullable|email',
            'telefono' => 'required|string',
            'telefono2' => 'nullable|string',
            'institucion' => 'required|string',
            'reservation_date' => 'required|date',
            'sala' => 'required|string',
            'start_time' => 'required',
            'direccion' => 'required|string',
            'locomocion' => 'required|string',
            'requerimientos' => 'nullable|string',
            'total_ninios' => 'required|numeric',
            'total_adultos' => 'required|numeric',
            'edad' => 'required|string',
            'extranjero' => 'required|string',
            'obs' => 'nullable|string',
            'reservation_status' => 'required|in:pendiente,cancelada,confirmada,realizada',
            'cancellation_reason' => 'nullable|string',
        ]);

        $reservation = Reservation::findOrFail($id);

            // 🔒 VALIDAR CUPO DE HORARIO (máx 2)
        $existingCount = Reservation::where('reservation_date', $request->reservation_date)
            ->where('start_time', $request->start_time)
            ->whereIn('reservation_status', ['pendiente', 'confirmada'])
            ->where('id', '!=', $reservation->id)
            ->count();

        if ($existingCount >= 2) {
            return back()
                ->withErrors(['start_time' => 'Horario completo, por favor elija otro horario'])
                ->withInput();
        }

        // Actualizar solo los campos de la tabla reservations
        $reservation->update([
            'reservation_date' => $request->reservation_date,
            'start_time' => $request->start_time,
            'reservation_status' => $request->reservation_status,
            'institucion' => $request->institucion,
            'cancellation_reason' => $request->cancellation_reason,
        ]);

        // Actualizar los campos de reservation_details
        if ($reservation->detail) {
            $reservation->detail->update([
            'nombre_responsable' => $request->nombre_responsable,
            'ci' => $request->ci,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'telefono2' => $request->telefono2,
            'sala' => $request->sala,
            'direccion' => $request->direccion,
            'locomocion' => $request->locomocion,
            'requerimientos' => $request->requerimientos,
            'total_ninios' => $request->total_ninios,
            'total_adultos' => $request->total_adultos,
            'edad' => $request->edad,
            'extranjero' => $request->extranjero,
            'obs' => $request->obs,
        ]);
        } else {
            // Crear el detail si no existe
            ReservationDetail::create(array_merge(['reservation_id' => $reservation->id], $request->only([
                'nombre_responsable','ci','email','telefono','telefono2','sala',
                'direccion','locomocion','requerimientos','total_ninios','total_adultos',
                'edad','extranjero','obs'
            ])));
        }

        return redirect()->route('reservations.index')->with('success','Reserva actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        // eliminar detalle si existe
        if ($reservation->detail) {
            $reservation->detail->delete();
        }

        $reservation->delete();

        return redirect()->route('reservations.index')->with('success_delete', true);
    }

    public function cancel(Request $request){
        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'cancellation_reason' => 'required|string',
        ]);

        $reservation = Reservation::findOrFail($request->reservation_id);
        $reservation->reservation_status = 'cancelada';
        $reservation->cancellation_reason = $request->cancellation_reason;
        $reservation->save();

        // enviar correo de cancelación al usuario si existe email
        $this->sendCancellationEmail($reservation, $request->cancellation_reason);

        return response()->json([
            'success' => true,
            'message' => 'La reserva ha sido cancelada exitosamente',
        ]);
    }


    public function getAllReservations(){
        try {
            // Eager load related models to avoid N+1 and normalize output
            $reservations = Reservation::with(['detail', 'user'])->get();
            $events = [];

            foreach ($reservations as $reservation) {
                $color = '#e0e0e0';
                $bordercolor = '#e0e0e0';

                if ($reservation->reservation_status === 'confirmada') {
                    $color = '#ffc107';
                    $bordercolor = '#ffc107';
                } elseif ($reservation->reservation_status === 'realizada') {
                    $color = '#28a745';
                    $bordercolor = '#28a745';
                } elseif ($reservation->reservation_status === 'cancelada') {
                    $color = '#dc3545';
                    $bordercolor = '#dc3545';
                }

                // Normalizar start a formato ISO8601; si no es válido, saltar el evento
                $start = null;
                if ($reservation->reservation_date) {
                    $time = $reservation->start_time ?: '00:00';
                    try {
                        $parsed = Carbon::parse($reservation->reservation_date . ' ' . $time);
                        $start = $parsed->toIso8601String();
                    } catch (\Exception $e) {
                        $start = null;
                    }
                }

                // Si no hay una fecha de inicio válida, omitimos el evento para evitar romper FullCalendar
                if (empty($start)) {
                    continue;
                }

                $events[] = [
                    'id' => $reservation->id,
                    'title' => trim($reservation->institucion . ' ' . ($reservation->start_time ?? '')) ?: 'Reserva',
                    'start' => $start,
                    'backgroundColor' => $color,
                    'borderColor' => $bordercolor,
                    'extendedProps' => [
                        'reservation_status' => $reservation->reservation_status,
                        'institucion' => $reservation->institucion,
                        'reservation_date' => $reservation->reservation_date,
                        'start_time' => $reservation->start_time,
                        'cancellation_reason' => $reservation->cancellation_reason,
                        'user' => $reservation->user ? [
                            'email' => $reservation->user->email,
                            'name' => $reservation->user->nombres ?? null,
                        ] : null,
                        'detail' => $reservation->detail ? [
                            'nombre_responsable' => $reservation->detail->nombre_responsable,
                            'ci' => $reservation->detail->ci,
                            'email' => $reservation->detail->email,
                            'telefono' => $reservation->detail->telefono,
                            'telefono2' => $reservation->detail->telefono2,
                            'sala' => $reservation->detail->sala,
                            'direccion' => $reservation->detail->direccion,
                            'total_ninios' => $reservation->detail->total_ninios,
                            'total_adultos' => $reservation->detail->total_adultos,
                            'requerimientos' => $reservation->detail->requerimientos,
                            'obs' => $reservation->detail->obs,
                        ] : null,
                    ],
                ];
            }

            // Log para debugging y asegurar que devolvemos JSON limpio
            Log::info('FullCalendar payload (administrador)', ['count' => count($events)]);
            Log::debug('FullCalendar events sample', array_slice($events, 0, 10));

            return response()->json($events, 200)
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', '0');
        } catch (\Exception $e) {
            Log::error('Error cargando reservas para calendario', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Error interno al cargar reservas'], 500);
        }
    }

    public function getAllReservationsCliente(){
        // $reservations = Reservation::where('user_id', Auth::id())->get();
        // Mostrar solo reservas del usuario que NO estén canceladas
        $reservations = Reservation::with('detail')
        ->where('user_id', Auth::id())
        ->where('reservation_status', '!=', 'cancelada')
        ->get();
        $events = [];

        foreach($reservations as $reservation){

            $color = '#e0e0e0';
            $bordercolor = '#e0e0e0';

            if($reservation->reservation_status === 'confirmada'){
                $color = '#ffc107';
                $bordercolor = '#ffc107';
            }elseif($reservation->reservation_status === 'realizada'){
                $color = '#28a745';
                $bordercolor = '#28a745';
            }elseif($reservation->reservation_status === 'cancelada'){
                $color = '#dc3545';
                $bordercolor = '#dc3545';
            }

            // Normalizar start y validar
            $start = null;
            if ($reservation->reservation_date) {
                $time = $reservation->start_time ?: '00:00';
                try {
                    $start = Carbon::parse($reservation->reservation_date . ' ' . $time)->toIso8601String();
                } catch (\Exception $e) {
                    $start = null;
                }
            }

            if (empty($start)) {
                continue;
            }

            $events[] = [
                'id' => $reservation->id,
                'title' => trim($reservation->institucion.' '.$reservation->start_time) ?: 'Reserva',
                'start' => $start,
                'backgroundColor'=> $color,
                'borderColor'=> $bordercolor,
                'extendedProps' => [
                    'reservation_status' => $reservation->reservation_status,
                    'institucion' => $reservation->institucion,
                    'reservation_date' => $reservation->reservation_date,
                    'start_time' => $reservation->start_time,
                    'cancellation_reason' => $reservation->cancellation_reason,
                    'user' => $reservation->user ? [
                        'email' => $reservation->user->email,
                        'name' => $reservation->user->name ?? null,
                    ] : null,
                    'detail' => $reservation->detail ? [
                        'nombre_responsable' => $reservation->detail->nombre_responsable,
                        'ci' => $reservation->detail->ci,
                        'email' => $reservation->detail->email,
                        'telefono' => $reservation->detail->telefono,
                        'telefono2' => $reservation->detail->telefono2,
                        'sala' => $reservation->detail->sala,
                        'direccion' => $reservation->detail->direccion,
                        'total_ninios' => $reservation->detail->total_ninios,
                        'total_adultos' => $reservation->detail->total_adultos,
                        'requerimientos' => $reservation->detail->requerimientos,
                        'obs' => $reservation->detail->obs,
                    ] : null,
                ],
            ];

        }

        Log::info('FullCalendar payload (cliente)', ['count' => count($events)]);
        Log::debug('FullCalendar events cliente sample', array_slice($events, 0, 10));

        return response()->json($events)
            ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }



    /**
     * Devuelve la disponibilidad de horas para una fecha dada.
     * Respuesta JSON: { '08:00': 1, '09:00': 2, ... }
     */
    public function availability(Request $request)
    {
        $request->validate(['reservation_date' => 'required|date']);

        $date = $request->reservation_date;

        $counts = Reservation::select('start_time', DB::raw('count(*) as total'))
            ->where('reservation_date', $date)
            ->where('reservation_status', '!=', 'cancelada')
            ->groupBy('start_time')
            ->pluck('total', 'start_time')
            ->toArray();

        // ensure all timeSlots appear in the response
        $response = [];
        foreach ($this->timeSlots as $slot) {
            $response[$slot] = isset($counts[$slot]) ? (int)$counts[$slot] : 0;
        }

        return response()->json($response);
    }

    /**
     * Devuelve las fechas completamente ocupadas (todos los horarios con 2 reservas).
     * Respuesta: [ '2026-01-12', '2026-01-15' ]
     */
    public function fullyBookedDates()
    {
        // Obtener por fecha y hora los conteos
        $rows = Reservation::select('reservation_date','start_time', DB::raw('count(*) as total'))
            ->where('reservation_status', '!=', 'cancelada')
            ->groupBy('reservation_date','start_time')
            ->get();

        $dates = [];

        // Contabilizar por fecha cuántos horarios están al tope (>=2)
        $countsPerDate = [];
        foreach ($rows as $r) {
            if ($r->total >= 2) {
                $countsPerDate[$r->reservation_date] = ($countsPerDate[$r->reservation_date] ?? 0) + 1;
            }
        }

        $totalSlots = count($this->timeSlots);

        foreach ($countsPerDate as $date => $fullSlots) {
            if ($fullSlots >= $totalSlots) {
                $dates[] = $date;
            }
        }

        return response()->json($dates);
    }

    private function sendConfirmationEmail(Reservation $reservation)
    {
        $reservation->load(['detail', 'user']);

        // ⚠️ Si el usuario no tiene mail, no mandamos nada
        if (!$reservation->user || !$reservation->user->email) {
            return;
        }

        $data = [
            'userName' => $reservation->user->nombres,
            'nombre_responsable' => $reservation->detail->nombre_responsable,
            'telefono' => $reservation->detail->telefono,
            'reservationDate' => $reservation->reservation_date,
            'start_time' => $reservation->start_time,
            'total_adultos' => $reservation->detail->total_adultos,
            'total_ninios' => $reservation->detail->total_ninios,
            'edad' => $reservation->detail->edad,
            'sala' => $reservation->detail->sala,
            'observations' => $reservation->detail->obs,
        ];

        $html = view('emails.reserva', $data)->render();

        try {
            $mail = new PHPMailer(true);

            // 🔧 SMTP GMAIL
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;


            $mail->CharSet  = 'UTF-8';
            $mail->Encoding = 'base64';

            // ✉️ MAIL
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Museo Aeronáutico');
            $mail->addAddress($reservation->user->email);

            $mail->isHTML(true);
            $mail->Subject = 'Solicitud de reserva enviada';
            $mail->Body    = $html;

            $mail->send();

        } catch (Exception $e) {
            Log::error('Error enviando mail de reserva', [
                'error' => $mail->ErrorInfo ?? $e->getMessage()
            ]);
        }
    }

    /**
     * Enviar email de cancelación a usuario
     */
    private function sendCancellationEmail(Reservation $reservation, string $reason)
    {
        $reservation->load(['detail', 'user']);

        if (!$reservation->user || !$reservation->user->email) {
            return;
        }

        $data = [
            'userName' => $reservation->user->nombres,
            'reservationDate' => $reservation->reservation_date,
            'start_time' => $reservation->start_time,
            'reason' => $reason,
        ];

        $html = view('emails.reserva_cancelada', $data)->render();

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->CharSet  = 'UTF-8';
            $mail->Encoding = 'base64';

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Museo Aeronáutico');
            $mail->addAddress($reservation->user->email);

            $mail->isHTML(true);
            $mail->Subject = 'Su visita fue cancelada';
            $mail->Body    = $html;

            $mail->send();
        } catch (Exception $e) {
            Log::error('Error enviando mail de cancelación', [
                'error' => $mail->ErrorInfo ?? $e->getMessage()
            ]);
        }
    }

    /**
     * Enviar un correo de recordatorio un día antes de la visita
     *
     * Este método reutiliza la misma configuración que los otros correos y
     * se puede invocar desde un comando programado.
     */
    public function sendReminderEmail(Reservation $reservation)
    {
        $reservation->load(['detail', 'user']);

        if (!$reservation->user || !$reservation->user->email) {
            return;
        }

        $data = [
            'userName' => $reservation->user->nombres,
            'nombre_responsable' => $reservation->detail->nombre_responsable ?? null,
            'telefono' => $reservation->detail->telefono ?? null,
            'reservationDate' => $reservation->reservation_date,
            'start_time' => $reservation->start_time,
            'sala' => $reservation->detail->sala ?? null,
            'observations' => $reservation->detail->obs ?? null,
        ];

        $html = view('emails.reserva_recordatorio', $data)->render();

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->CharSet  = 'UTF-8';
            $mail->Encoding = 'base64';

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Museo Aeronáutico');
            $mail->addAddress($reservation->user->email);

            $mail->isHTML(true);
            $mail->Subject = 'Recordatorio de su visita al Museo Aeronáutico';
            $mail->Body    = $html;

            $mail->send();
        } catch (Exception $e) {
            Log::error('Error enviando mail de recordatorio', [
                'error' => $mail->ErrorInfo ?? $e->getMessage(),
                'reservation_id' => $reservation->id,
            ]);
        }
    }

    /**
     * Enviar un correo de seguimiento al día siguiente de la visita
     *
     * Pide feedback y ofrece un mapa de ubicación.
     */
    public function sendFollowupEmail(Reservation $reservation)
    {
        $reservation->load(['detail', 'user']);

        if (!$reservation->user || !$reservation->user->email) {
            return;
        }

        $data = [
            'userName' => $reservation->user->nombres,
            'reservationDate' => $reservation->reservation_date,
            'start_time' => $reservation->start_time,
            'feedbackLink' => 'https://share.google/GSo0d4b9fkqtUUbu7',
        ];

        $html = view('emails.reserva_feedback', $data)->render();

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->CharSet  = 'UTF-8';
            $mail->Encoding = 'base64';

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Museo Aeronáutico');
            $mail->addAddress($reservation->user->email);

            $mail->isHTML(true);
            $mail->Subject = 'Gracias por visitarnos – necesitamos tu opinión';
            $mail->Body    = $html;

            $mail->send();
        } catch (Exception $e) {
            Log::error('Error enviando mail de seguimiento', [
                'error' => $mail->ErrorInfo ?? $e->getMessage(),
                'reservation_id' => $reservation->id,
            ]);
        }
    }
}



