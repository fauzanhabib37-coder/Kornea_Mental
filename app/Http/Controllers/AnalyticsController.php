<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function results()
    {
        return view('analytics.results');
    }

    public function school()
    {
        return view('analytics.school');
    }

    public function university()
    {
        return view('analytics.university');
    }
}
