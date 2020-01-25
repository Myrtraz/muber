<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model {

   protected $fillable = [
   		'name',
   		'img',
   		'capacity',
   		'min_ride_cost',
   		'cost_per_meter',
   		'min_distance_for_min_cost'
   	];
}
