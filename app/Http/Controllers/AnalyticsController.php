<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Faculty;

class AnalyticsController extends Controller
{
    public function results()
    {
        return view('analytics.results');
    }

    public function school()
    {
        $students = Student::all();
        return view('analytics.school', compact('students'));
    }

    public function university()
    {
        $faculties = Faculty::all();
        return view('analytics.university', compact('faculties'));
    }
}
