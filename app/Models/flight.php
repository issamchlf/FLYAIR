<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $table = 'flights';
    protected $fillable = ['airplane_id', 'flight_number', 'departure_airport', 'arrival_airport', 'departure_time', 'arrival_time', 'price', 'available_seats', 'status'];

    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
