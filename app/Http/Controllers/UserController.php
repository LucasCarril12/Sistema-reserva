<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

// libreria para encriptar contraseña
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::with('role')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    // Creamos un registro

    public function create(){
        //obtener los roles para poder seleccionar al momento de crear un registro
        $roles = Role::all();
        //devolver la vista de creacion con los roles disponibles asi podemos crear el listado con los roles que tenemos
        return view('usuarios.create',compact('roles'));
    }

    public function store(Request $request){
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'teléfono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email',
            'rol_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if($request->hasFile('foto')){
            $fotoPath = $request->file('foto')->store('fotos','public');
        }

        //Creamos usuario

        User::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'teléfono' => $request->teléfono,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'password' => Hash::make('12345678'), //Cuando se cree un usuario este tendra la contraseña "12345678" por defecto
            'foto' => $fotoPath,

        ]);

        return redirect()->route('usuarios.index')->with('success_create','Registro creado correctamente');
    }

    // Editamos un registro
    public function edit($id){
        $usuario = User::findOrFail($id); //aca estamos teniendo todos los usuarios que concuerden con el ID que le pasamos como parametro a la funcion
        $roles = Role::all();

        return view('usuarios.edit', compact('usuario','roles'));
    }

    // Actualizamos un registro
    public function update(Request $request, $id){
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'teléfono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' .$id, //vemos que no se repita el correo
            'rol_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $usuario = User::findOrFail($id);

        if($request->hasFile('foto')){
            $fotoPath = $request->file('foto')->store('fotos','public');
            $usuario->foto = $fotoPath;
        }

        $usuario->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'teléfono' => $request->teléfono,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Registro actualizado correctamente');
    }

    //eliminamos de forma logica a un usuario
    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success_delete','Registro eliminado correctamente');
    }
}
