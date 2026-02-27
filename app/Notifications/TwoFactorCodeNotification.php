<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFactorCodeNotification extends Notification
{
     use Queueable;

    protected $code;

    public function __construct($code)
    {
        $this->code = $code;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        // Usamos una vista personalizada para poder insertar el logo del
        // museo y eliminar cualquier referencia a "Laravel" que aparezca en
        // las plantillas por defecto.
        return (new MailMessage)
            ->subject('Código de verificación - Museo Aeronáutico')
            ->view('emails.twofactor_code', [
                'code' => $this->code,
                'user' => $notifiable,
            ]);
    }
}
