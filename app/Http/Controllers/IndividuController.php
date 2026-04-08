<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchSession;
use Illuminate\Support\Str;

class IndividuController extends Controller
{
    public function dashboard()
    {
        $sessions = ResearchSession::latest()->get();
        return view('dashboard.individu', compact('sessions'));
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function analytics()
    {
        return view('analytics.results');
    }

    /**
     * Start a new personal eye-tracking session.
     */
    public function startSession(Request $request)
    {
        $request->validate([
            'session_name' => 'required|string|max:100',
            'task_type'    => 'required|string|max:50',
        ]);

        $user = auth()->user();
        $initials = strtoupper(substr($user->name, 0, 2));

        $session = ResearchSession::create([
            'session_code'    => 'KM-' . strtoupper(Str::random(5)),
            'client_initials' => $initials,
            'client_name'     => $request->session_name,
            'duration'        => '0m 0s',
            'avg_focus_score' => 0,
            'status'          => 'Berlangsung',
            'is_alert'        => false,
        ]);

        return response()->json([
            'success'      => true,
            'session_id'   => $session->id,
            'session_code' => $session->session_code,
            'message'      => 'Sesi berhasil dimulai',
        ]);
    }

    /**
     * End an active session and save final metrics.
     */
    public function endSession(Request $request, $id)
    {
        $session = ResearchSession::findOrFail($id);

        $session->update([
            'duration'        => $request->duration ?? '0m 0s',
            'avg_focus_score' => $request->focus_score ?? 0,
            'status'          => 'Selesai',
            'is_alert'        => ($request->focus_score ?? 100) < 55,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Sesi berhasil disimpan',
        ]);
    }
}
