<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        Log::info('Registro request headers', ['content_length' => $request->headers->get('content-length')]);
        Log::info('Registro files keys', ['files' => array_keys($request->files->all())]);
        $request->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'ci' => ['required', 'digits_between:6,8', 'unique:users,ci'],
            'telefono' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'foto' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],        ], [
            'ci.digits_between' => 'C.I invalida',        ]);

        //veo si a subido una foto o no
        $fotoPath = null;
        if($request->hasFile('foto')){
            try {
                $fotoPath = $request->file('foto')->store('fotos','public');
                Log::info('Foto subida en registro', ['path' => $fotoPath, 'size' => $request->file('foto')->getSize()]);
            } catch (\Exception $e) {
                Log::error('Error guardando foto en registro', ['mensaje' => $e->getMessage()]);
            }
        } else {
            Log::info('No se detectó archivo para campo foto en la petición de registro', ['hasFile' => $request->hasFile('foto')]);
        }

        $user = User::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'ci' => $request->ci,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'foto'=>$fotoPath,
            'rol_id'=> 3,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
