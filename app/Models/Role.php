<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relacionamos manualmnente con la tabla de la base de datos, esto sirve para poder evitar problemas si hay alguna letra de mas en el nombre
    protected $table = 'roles';

    //Campos que son rellenables
    protected $fillable = [
        'name'
    ];

    //RELACIONES CON OTROS MODELOS

    public function users(){
        //rol va a tener muchos usuarios y su FK es "rol_id"
        return $this->hasMany(User::class,'rol_id');
    }
}
