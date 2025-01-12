<?php

namespace App\Models\admin\wallet;

use App\Models\admin\category\Category;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'category_id',
        'section_1_name',
        'section_1_rate',
        'section_1_currency',
        'section_2_name',
        'section_2_rate',
        'section_2_currency',
        'section_3_name',
        'section_3_rate',
        'section_3_currency',
        'section_4_name',
        'section_4_rate',
        'section_4_currency',
        'section_5_name',
        'section_5_rate',
        'section_5_currency',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}