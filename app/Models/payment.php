<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['user_id', 'reservation_id', 'amount', 'payment_method', 'status'];
    public $timestamps = true;
}
