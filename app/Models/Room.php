<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // Bu hissə bazaya hansı məlumatların yazılmasına icazə verdiyimizi göstərir
    protected $fillable = ['room_number', 'room_type', 'price', 'is_available'];
}