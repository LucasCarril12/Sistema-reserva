<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'users';

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $dates = ['deleted_at'];

    //Campos que son rellenables
    protected $fillable = [
        'nombres',
        'apellidos',
        'foto',
        'teléfono',
        'email',
        'password',
        'rol_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */

    //Campos ocultos
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    //RELACIONES CON OTROS MODELOS

    public function role(){
        return $this->belongsTo(Role::class,'rol_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function consultantReservations()
    {
        return $this->hasMany(Reservation::class,'consulta_id');
    }



}
