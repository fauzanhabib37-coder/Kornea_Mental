<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchSession;

class DashboardController extends Controller
{
    public function index()
    {
        $sessions = ResearchSession::all();
        return view('dashboard.index', compact('sessions'));
    }

    public function profile()
    {
        return view('dashboard.profile');
    }
}
