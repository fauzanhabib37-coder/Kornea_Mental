<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /** Show the pricing/checkout page */
    public function checkout(Request $request)
    {
        $plan = $request->query('plan', 'individu'); // individu | institusi
        return view('payment.checkout', compact('plan'));
    }

    /** Handle "Bayar Sekarang" form submit — simulate payment & redirect to API key page */
    public function processPayment(Request $request)
    {
        $request->validate([
            'plan'  => 'required|in:individu,institusi',
            'name'  => 'required|string|max:100',
            'email' => 'required|email',
        ]);

        // Generate a demo API key tied to plan
        $prefix = $request->plan === 'institusi' ? 'KM-INST' : 'KM-INDV';
        $apiKey = $prefix . '-' . strtoupper(substr(md5(uniqid($request->email, true)), 0, 16));
        $orderId = 'ORD-' . strtoupper(substr(md5(uniqid()), 0, 8));

        // Store in session for the next steps
        session([
            'payment.plan'    => $request->plan,
            'payment.name'    => $request->name,
            'payment.email'   => $request->email,
            'payment.apikey'  => $apiKey,
            'payment.orderId' => $orderId,
            'payment.paid'    => true,
        ]);

        return redirect()->route('payment.apikey');
    }

    /** Show the API key page after payment */
    public function apiKeyPage()
    {
        if (!session('payment.paid')) {
            return redirect()->route('checkout');
        }
        return view('payment.apikey');
    }

    /** Verify the API key user entered, then redirect to register */
    public function verifyApiKey(Request $request)
    {
        $request->validate([
            'api_key' => 'required|string',
        ]);

        $sessionKey = session('payment.apikey');

        if ($request->api_key !== $sessionKey) {
            return back()->withErrors(['api_key' => 'API Key tidak valid. Pastikan Anda menyalin dengan benar.']);
        }

        // Mark key as verified; register form will use this
        session(['payment.apikey_verified' => true]);

        return redirect()->route('register');
    }
}
