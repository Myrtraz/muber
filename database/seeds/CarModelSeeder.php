<?php

use Illuminate\Database\Seeder;

use App\CarBrand;
use App\CarColor;
use App\CarModel;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chevrolet = CarBrand::create([ 'name' => 'Chevrolet' ]);
        $toyota = CarBrand::create([ 'name' => 'Toyota' ]);

        $aveo = CarModel::create([
            'name' => 'Aveo',
            'brand_id'=> $chevrolet->id
        ]);

        $black_aveo = CarColor::create([
            'name' => 'Negro',
            'img' => '',
            'car_model_id' => $aveo->id
        ]);

        $white_aveo = CarColor::create([
            'name' => 'Blanco',
            'img' => '',
            'car_model_id' => $aveo->id
        ]);

        $optra = CarModel::create([
            'name' => 'Optra',
            'brand_id'=> $chevrolet->id
        ]);

        $white_optra = CarColor::create([
            'name' => 'Blanco',
            'img' => '',
            'car_model_id' => $optra->id
        ]);

        $corolla = CarModel::create([
            'name' => 'Corolla',
            'brand_id'=> $toyota->id
        ]);

        $white_corolla = CarColor::create([
            'name' => 'Blanco',
            'img' => '',
            'car_model_id' => $corolla->id
        ]);

        $prius = CarModel::create([
            'name' => 'Prius',
            'brand_id'=> $toyota->id
        ]);

        $white_prius = CarColor::create([
            'name' => 'Blanco',
            'img' => '',
            'car_model_id' => $prius->id
        ]);
    }
}
