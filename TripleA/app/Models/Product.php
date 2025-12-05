<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'name',
        'price',
        'size',
        'description'
    ];
    
    public function cart(){
       return $this->hasMany(Cart::class);
    }
}
