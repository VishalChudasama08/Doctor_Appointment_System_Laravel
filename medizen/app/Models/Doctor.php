<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctors";
    protected $fillable = ['image', 'user_id', 'expertise', 'experience', 'education', 'profession', 'available_days', 'available_time'];
}
