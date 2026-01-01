<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// libreria para encriptar contraseña
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email',
            'rol_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'ci' => 'required|numeric|digits_between:6,8|unique:users,ci'
        ]);

        $fotoPath = null;
        if($request->hasFile('foto')){
            $fotoPath = $request->file('foto')->store('fotos','public');
        }

        //Creamos usuario

        User::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'password' => Hash::make('12345678'), //Cuando se cree un usuario este tendra la contraseña "12345678" por defecto
            'foto' => $fotoPath,
            'ci' => $request->ci,

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

        Log::info('Update request headers', ['content_length' => $request->headers->get('content-length')]);
        Log::info('Update request input keys', ['inputs' => array_keys($request->all())]);
        Log::info('Update request files keys', ['files' => array_keys($request->files->all())]);

        $request->validate([
            'nombres'   => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono'  => 'required|string|max:15',
            'rol_id'    => 'required|integer',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
                    ->ignore($id)
                    ->whereNull('deleted_at'),
            ],

            'ci' => [
                'required',
                'digits_between:6,8',
                Rule::unique('users', 'ci')
                    ->ignore($id)
                    ->whereNull('deleted_at'),
            ],
        ]);

        $usuario = User::findOrFail($id);

        $fotoPath = null;
        if($request->hasFile('foto')){
            try {
                $fotoPath = $request->file('foto')->store('fotos','public');
                Log::info('Foto subida en edición de usuario', ['user_id' => $id, 'path' => $fotoPath, 'size' => $request->file('foto')->getSize()]);
            } catch (\Exception $e) {
                Log::error('Error guardando foto en edición de usuario', ['user_id' => $id, 'mensaje' => $e->getMessage()]);
            }
        }

        $updateData = [
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'ci' => $request->ci,
        ];

        if($fotoPath){
            $updateData['foto'] = $fotoPath;
        }

        $updated = $usuario->update($updateData);

        // Log the stored value from DB and whether the update succeeded
        Log::info('Usuario actualizado', ['user_id' => $id, 'updated' => $updated, 'db' => $usuario->fresh()->toArray()]);

        return redirect()->route('usuarios.index')->with('success', 'Registro actualizado correctamente');
    }

    //eliminamos de forma logica a un usuario
    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success_delete','Registro eliminado correctamente');
    }
}
