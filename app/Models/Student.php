<?php

// Eloquent model representing a student in the system

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
    ];

    protected $casts = [
        'date_of_birth' => 'date:Y-m-d',
    ];
}
