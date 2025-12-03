<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactmsg extends Model
{
    protected $fillable = [
        'user_id',
        'number',
        'subject',
        'message'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
