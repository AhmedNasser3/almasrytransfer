<?php

namespace App\Models\admin\honesty;

use Illuminate\Database\Eloquent\Model;

class PersonalHonesty extends Model
{
    protected $fillable = [
        'currency',
        'amount',
        'rate',
        'reason',
    ];
}