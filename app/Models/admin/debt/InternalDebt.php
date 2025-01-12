<?php

namespace App\Models\admin\debt;

use Illuminate\Database\Eloquent\Model;

class InternalDebt extends Model
{
    protected $fillable = [
        'amount',
        'currency',
        'reason',
    ];
}