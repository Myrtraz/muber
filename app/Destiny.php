<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destiny extends Model
{
    protected $fillable = [
    	'lat',
		'lng',
		'google_place_id',
		'travel_id',
		'index',
    ];
}
