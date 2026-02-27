<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Notifications\TwoFactorCodeNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Validar credenciales
        $request->authenticate();

        /** @var User $user */
        $user = Auth::user();

        // Generar código 6 dígitos
        $code = random_int(100000, 999999);

        // Guardar código y expiración
        $user->update([
            'two_factor_code' => $code,
            'two_factor_expires_at' => now()->addMinutes(10),
        ]);

        // Enviar código por email
        $user->notify(new TwoFactorCodeNotification($code));

        //  Cerrar sesión temporalmente
        Auth::logout();

        //  Guardar ID en sesión y tipo de operación (login)
        $request->session()->put('2fa_user_id', $user->id);
        $request->session()->put('2fa_type', 'login');

        //  Redirigir a pantalla de verificación
        return redirect()->route('2fa.verify');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
