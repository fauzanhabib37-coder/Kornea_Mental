<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name',
        'student_count',
        'avg_focus',
        'fatigue_index',
        'status',
        'requires_attention'
    ];
}
