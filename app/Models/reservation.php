<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = ['user_id', 'flight_id', 'seat_number', 'status'];

}
