<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'license_plate',
        'user_id',
        'car_model_id',
        'car_brand_id',
        'car_color_id',
    ];

    public function model() {
        return $this->belongsTo('App\CarModel', 'car_model_id');
    }

    public function brand() {
        return $this->belongsTo('App\CarBrand', 'car_brand_id');
    }

    public function color() {
        return $this->belongsTo('App\CarColor', 'car_color_id');
    }
}
