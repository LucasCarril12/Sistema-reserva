<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\TwoFactorCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorController extends Controller
{
    public function index()
    {
        if (!session('2fa_user_id')) {
        return redirect()->route('login');
        }

        $user = \App\Models\User::find(session('2fa_user_id'));

        return view('auth.two-factor', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string'
        ]);

        $user = User::find(session('2fa_user_id'));

        if (!$user) {
            return redirect()->route('login');
        }

        if (
            $user->two_factor_code !== $request->code ||
            $user->two_factor_expires_at->isPast()
        ) {
            return back()->withErrors(['code' => 'Código inválido o expirado']);
        }

        // Código correcto → limpiar campos
        $user->update([
            'two_factor_code' => null,
            'two_factor_expires_at' => null,
        ]);

        // Determinar si es login o registro
        $type = session('2fa_type', 'login');

        // Hacer login del usuario
        Auth::login($user);

        session()->forget('2fa_user_id');
        session()->forget('2fa_type');

        // Redirigir al dashboard
        return redirect()->route('dashboard');
    }

    /**
     * Resend el código de verificación
     */
    public function resend(Request $request)
    {
        $user = User::find(session('2fa_user_id'));

        if (!$user) {
            return redirect()->route('login');
        }

        // Generar nuevo código
        $code = random_int(100000, 999999);

        // Guardar código y expiración
        $user->update([
            'two_factor_code' => $code,
            'two_factor_expires_at' => now()->addMinutes(10),
        ]);

        // Enviar código por email
        $user->notify(new TwoFactorCodeNotification($code));

        return back()->with('message', 'Código reenviado a tu correo electrónico');
    }

    /**
     * Cancelar la verificación (volver a login/registro)
     */
    public function cancel(Request $request)
    {
        $user = User::find(session('2fa_user_id'));
        $type = session('2fa_type', 'login');

        if ($user) {
            // Limpiar código si es registro (el usuario será eliminado)
            if ($type === 'registration') {
                $user->delete();
            } else {
                // Si es login, solo limpiar el código
                $user->update([
                    'two_factor_code' => null,
                    'two_factor_expires_at' => null,
                ]);
            }
        }

        session()->forget('2fa_user_id');
        session()->forget('2fa_type');

        if ($type === 'registration') {
            return redirect()->route('register')->with('message', 'Registro cancelado. Por favor, intenta de nuevo.');
        } else {
            return redirect()->route('login')->with('message', 'Verificación cancelada. Por favor, intenta nuevamente.');
        }
    }
}
