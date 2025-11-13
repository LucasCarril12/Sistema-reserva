<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'reservation';

    //Elementos que se pueden completar
    protected $fillable = [
        'user_id',
        'consulta_id',
        'reservation_date',
        'start_time',
        'end_time',
        'reservation_state',
        'total_amount',
        'paymante_status',
        'cancellation_rason',
    ];

    public function user(){
        return $this->belongsTo(User::class,'rol_id');
    }

    public function consulta(){
        return $this->belongsTo(User::class,'consulta_id');
    }
}
