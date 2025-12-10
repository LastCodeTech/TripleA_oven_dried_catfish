<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Order extends Model
{
        use  Notifiable;
    protected $fillable = [
        'order_number',
        'user_id',
        'city_id',
        'customer_email',
        'address',
        'tel',
        'amount',
        'items',
        'payment_reference',
        'payment_data',
        'user_id',
        'status',
        'paid_at',
    ];




    protected $casts = [
        'items' => 'array',
        'payment_data' => 'array',
        'paid_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = 'ORD-' . date('Y') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function City(){
        $this->belongsTo(City::class);
    }
}
