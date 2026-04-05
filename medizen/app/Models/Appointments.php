<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $table = "appointments";
    protected $fillable = [
        'user_id',
        'doctor_id',
        'name',
        'number',
        'day',
        'date',
        'time',
        'message',
        'status',
    ];
}
