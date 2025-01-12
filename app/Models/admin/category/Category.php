<?php

namespace App\Models\admin\category;

use App\Models\admin\wallet\wallet;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function wallet(){
        return $this->hasMany(wallet::class);
    }
}