<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class airplane extends Model
{
    protected $table = 'airplanes';
    protected $fillable = ['name', 'type', 'max_seats'];
    
    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
    
}
