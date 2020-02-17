<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    const CREATED = 'created';
    const PICK = 'pick'; //va a buscar el usuario
    const WAITING = 'waiting'; //esperando por el usuario
    const RUNNING = 'running'; //en via para el destino
    const FINISHED = 'finished';

    const CANCELLED = 'cancelled';

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
