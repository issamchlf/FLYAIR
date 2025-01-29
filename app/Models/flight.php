<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    protected $fillable = ['airplane_id', 'flight_number', 'departure_airport', 'arrival_airport', 'departure_time', 'arrival_time', 'price', 'available_seats', 'status'];

    public function Airplane()
    {
        return $this->belongsTo(Airplane::class);
    }

    public function User()
    {
        return $this->belongsToMany(User::class);
    }
}
