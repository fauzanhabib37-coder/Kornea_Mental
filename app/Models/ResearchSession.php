<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchSession extends Model
{
    protected $fillable = [
        'session_code',
        'client_initials',
        'client_name',
        'duration',
        'avg_focus_score',
        'status',
        'is_alert'
    ];
}
