<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'food', 'water', 'wifi', 'electricity', 'room_rent', 'distance', 'total_capacity', 'room_capacity', 'total_vacancy', 'contact', 'address', 'image'
    ];
}
