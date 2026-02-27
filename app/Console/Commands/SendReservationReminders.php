<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ReservationController;

class SendReservationReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar correos de recordatorio para reservas que ocurrirán mañana';

    public function handle()
    {
        $tomorrow = Carbon::tomorrow()->toDateString();
        $this->info("Buscando reservas para recordatorio (fecha: {$tomorrow})...");

        $reminders = Reservation::where('reservation_date', $tomorrow)
            ->where('reservation_status', 'confirmada')
            ->with(['user','detail'])
            ->get();

        $this->info('Recordatorios a enviar: ' . $reminders->count());

        $controller = app(ReservationController::class);

        foreach ($reminders as $reservation) {
            $controller->sendReminderEmail($reservation);
            Log::info('Recordatorio enviado para reserva', ['id' => $reservation->id]);
        }

        // ----------------------------------------------------------------
        // ahora envíos de seguimiento post-visita (día anterior)
        $yesterday = Carbon::yesterday()->toDateString();
        $this->info("Buscando reservas para seguimiento (fecha: {$yesterday})...");

        $followups = Reservation::where('reservation_date', $yesterday)
            ->where('reservation_status', 'confirmada')
            ->orWhere('reservation_status', 'realizada')
            ->with(['user','detail'])
            ->get();

        $this->info('Seguimientos a enviar: ' . $followups->count());

        foreach ($followups as $reservation) {
            $controller->sendFollowupEmail($reservation);
            Log::info('Seguimiento enviado para reserva', ['id' => $reservation->id]);
        }

        $this->info('Proceso terminado.');
        return 0;
    }
}
