<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ReservationDetail;


class Reservation extends Model
{
    use HasFactory;
    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'reservations';

    //Elementos que se pueden completar
    protected $fillable = [
    'user_id',
    'email',
    'reservation_date',
    'start_time',
    'reservation_status',
    'cancellation_reason',
    'institucion'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function consultant(){
        return $this->belongsTo(User::class,'consultant_id');
    }

    public function detail()
    {
        return $this->hasOne(ReservationDetail::class, 'reservation_id');
    }

}
