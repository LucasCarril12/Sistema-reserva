<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{

    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'reservations_details';

    protected $fillable = [
        'reservation_id',
        'transaction_id',
        'payer_id',
        'payer_email',
        'payment_status',
        'amount',
        'response_json',
    ];

    public function reservation(){
        return $this->belongsTo(reservation::class);
    }

}
