<?php

use Illuminate\Database\Seeder;
use App\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Rate::create([
       	'name' => 'Pool',
       	'img' => 'https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_94,h_71/f_auto,q_auto:eco/v1554506930/navigation/UberPool.png',
       'capacity' => '2',
       'min_ride_cost' => '6000',
        'cost_per_meter' => '100',
        'min_distance_for_min_cost' => '1000'
    ]);

       Rate::create([
       	'name' => 'mUberX',
       	'img' => 'https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_94,h_71/f_auto,q_auto:eco/v1554506931/navigation/UberX.png',
       'capacity' => '4',
       'min_ride_cost' => '10700',
        'cost_per_meter' => '100',
        'min_distance_for_min_cost' => '1000'
    ]);

       Rate::create([
       	'name' => 'Black',
       	'img' => 'https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_94,h_71/f_auto,q_auto:eco/v1554506930/navigation/UberBlack.png',
       'capacity' => '4',
       'min_ride_cost' => '8900',
        'cost_per_meter' => '100',
        'min_distance_for_min_cost' => '1000'
    ]);

       Rate::create([
       	'name' => 'Van',
       	'img' => 'https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_94,h_71/f_auto,q_auto:eco/v1554506930/navigation/UberBlack_SUV.png',
       'capacity' => '7',
       'min_ride_cost' => '15785',
        'cost_per_meter' => '100',
        'min_distance_for_min_cost' => '1000'
    ]);

       Rate::create([
       	'name' => 'mUberLux',
       	'img' => 'https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_94,h_71/f_auto,q_auto:eco/v1554506931/navigation/UberLux.png',
       'capacity' => '1',
       'min_ride_cost' => '14678',
        'cost_per_meter' => '100',
        'min_distance_for_min_cost' => '1000'
    ]);

       Rate::create([
       	'name' => 'mUberXL',
       	'img' => 'https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_94,h_71/f_auto,q_auto:eco/v1554506931/navigation/UberXL.png',
       'capacity' => '6',
       'min_ride_cost' => '12000',
        'cost_per_meter' => '100',
        'min_distance_for_min_cost' => '1000'
    ]);
    }
}
