<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'user_id',
        'driver_id',
        'car_id',
        'rate_id',
        'state',
        'payment_method',
        'distance_in_meters',
        'total',
    ];
}
