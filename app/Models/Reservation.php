<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'reservations';

    //Elementos que se pueden completar
    protected $fillable = [
    'user_id',
    'consultant_id',
    'reservation_date',
    'start_time',
    'end_time',
    'reservation_status',
    'payment_status', //eliminar
    'total_amount', //eliminar
    'cancellation_reason'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function consultant(){
        return $this->belongsTo(User::class,'consultant_id');
    }
}
