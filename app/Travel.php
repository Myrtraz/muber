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

    static function getInRunningStates(){
        return [
            self::PICK,
            self::WAITING,
            self::RUNNING
        ];
    }

    static function getHistoryStates() {
        return [
            self::FINISHED,
            self::CANCELLED
        ];
    }

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

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
