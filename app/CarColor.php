<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarColor extends Model
{
    protected $fillable = [ 'name', 'img', 'car_model_id' ];
}
