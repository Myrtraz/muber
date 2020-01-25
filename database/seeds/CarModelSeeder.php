<?php

use App\CarBrand;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandA = CarBrand::create()
        $modelA = CarModel::create(['brand_id'=> $brandA->id])
    }
}
