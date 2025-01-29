<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    protected $table = 'airplanes';
    protected $fillable = ['name', 'type', 'max_seats'];
    
    public function Flights()
    {
        return $this->hasMany(Flight::class);
    }
    
}
