<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [ $loginType => $request->login, 'password' => $request->password];

        if (filter_var($request->login, FILTER_VALIDATE_EMAIL)) {
            $credentials[ 'email' ] = $request->login;
        } else {
            $credentials[ 'username' ] = $request->login;
        }

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors([
                'login' => 'Invalid Login Credentials.'
            ]);
        }

        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role === 'superadmin') {
            return redirect()->intended('/superadmin/dashboard');
        } elseif ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif ($user->role === 'staff') {
            return redirect()->intended('/staff/dashboard');
        } else {
            return redirect()->intended('/');
        }

        // return redirect()->intended(route('dashboard', absolute: false));
        // return redirect()->intended(RouteServiceProvider::HOME);
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
