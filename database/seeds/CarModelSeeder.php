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

        $spark = CarModel::create([
            'name' => 'Aveo',
            'brand_id'=> $chevrolet->id
        ]);

        CarColor::create([
            'name' => 'Verde',
            'img' => 'https://www.primemotorsleasing.com/wp-content/uploads/2018/08/Untitled-1-117-300x300.jpg',
            'car_model_id' => $spark->id
        ]);

        $impala = CarModel::create([
            'name' => 'Impala',
            'brand_id'=> $chevrolet->id
        ]);

        CarColor::create([
            'name' => 'Azul',
            'img' => 'https://www.primemotorsleasing.com/wp-content/uploads/2018/08/Untitled-1-121-300x300.jpg',
            'car_model_id' => $impala->id
        ]);

        $corolla = CarModel::create([
            'name' => 'Corolla',
            'brand_id'=> $toyota->id
        ]);

        CarColor::create([
            'name' => 'Blanco',
            'img' => 'https://www.primemotorsleasing.com/wp-content/uploads/2018/08/2016-toyota-corolla-le-lease-deal-new-300x300.jpg',
            'car_model_id' => $corolla->id
        ]);

        CarColor::create([
            'name' => 'Negro',
            'img' => 'https://www.primemotorsleasing.com/wp-content/uploads/2016/08/2016-Toyota-Corolla-black.png',
            'car_model_id' => $corolla->id
        ]);

        $prius = CarModel::create([
            'name' => 'Prius',
            'brand_id'=> $toyota->id
        ]);

        $white_prius = CarColor::create([
            'name' => 'Azul',
            'img' => 'https://www.primemotorsleasing.com/wp-content/uploads/2018/08/2016-toyota-prius-lease-specials-new-300x300.jpg',
            'car_model_id' => $prius->id
        ]);
    }
}
