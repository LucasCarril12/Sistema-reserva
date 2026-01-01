<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;


class ReservationDetail extends Model
{

    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'reservations_details';

    protected $fillable = [
        'reservation_id',
        'telefono',
        'telefono2',
        'direccion',
        'obs',
        'requerimientos',
        'locomocion',
        'total_ninios',
        'total_adultos',
        'edad',
        'extranjero',
        'nombre_responsable',
        'sala',
        'email',
        'ci',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }



}
