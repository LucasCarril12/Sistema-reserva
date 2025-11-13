<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importamos 2 librerias
use App\Models\User;
//Hash para encriptar la contraseña
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create([
            'nombres' => 'Admin',
            'apellidos' => 'principal',
            'foto' => null,
            'teléfono' => '096 227 785',
            'email' => 'ejemplo@gmail.com',
            'password' => Hash::make('password'),
            'rol_id' => 1, //Administrador
        ]);

        User::factory()->count(3)->create([
            'rol_id' => 2, //Se va a crear 3 registros random, pero se va a mantener que el roll_id = 2 en todos ya que queremos consultores
        ]);

        User::factory()->count(10)->create([
            'rol_id' => 3, //Se va a crear 3 registros random, pero se va a mantener que el roll_id = 3 en todos ya que queremos usuraio comunes
        ]);
    }
}
