<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'quantity',
        'product_id',
    ];

    public function product(){
        $this->belongsTo(Product::class);
    }
}
