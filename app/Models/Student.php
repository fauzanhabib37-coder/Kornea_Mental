<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'nis',
        'initials',
        'focus_score',
        'blink_rate',
        'saccade_status',
        'status_label',
        'status_color',
        'has_alert'
    ];
}
