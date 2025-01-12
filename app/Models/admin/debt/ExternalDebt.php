<?php

namespace App\Models\admin\debt;

use Illuminate\Database\Eloquent\Model;

class ExternalDebt extends Model
{
    protected $fillable  = [
        'amount',
        'currency',
        'receiver',
        'reason',
    ];
}