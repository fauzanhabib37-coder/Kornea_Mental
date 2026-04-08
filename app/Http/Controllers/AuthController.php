<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role === 'institusi') {
                return redirect()->intended(route('institusi.dashboard'));
            }
            return redirect()->intended(route('individu.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Kredensial email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /** Show register page (only accessible after API key verified) */
    public function registerForm()
    {
        if (!session('payment.apikey_verified')) {
            return redirect()->route('checkout');
        }
        return view('auth.register');
    }

    /** Create the account */
    public function register(Request $request)
    {
        if (!session('payment.apikey_verified')) {
            return redirect()->route('checkout');
        }

        $request->validate([
            'name'                  => 'required|string|max:100',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|min:8|confirmed',
        ]);

        $plan = session('payment.plan', 'individu');
        $role = $plan === 'institusi' ? 'institusi' : 'individu';

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $role,
        ]);

        // Clear payment session
        session()->forget(['payment.plan','payment.name','payment.email','payment.apikey','payment.orderId','payment.paid','payment.apikey_verified']);

        Auth::login($user);
        $request->session()->regenerate();

        return $role === 'institusi'
            ? redirect()->route('institusi.dashboard')->with('welcome', true)
            : redirect()->route('individu.dashboard')->with('welcome', true);
    }
}
