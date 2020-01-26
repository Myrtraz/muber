<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Car;
use App\CarModel;
use App\CarColor;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'usuario',
            'email' => 'fake@muber.com',
            'password' => bcrypt('123456'),
            'phone' => '1234567890'
        ]);

        $driver = User::create([
            'name' => 'driver',
            'email' => 'driver@muber.com',
            'password' => bcrypt('123456'),
            'phone' => '1023456789'
        ]);

        $carColor = CarColor::first();
        $carModel = CarModel::find($carColor->car_model_id);

        $car = Car::create([
            'license_plate' => 'ABC123',
            'user_id' => $driver->id,
            'car_model_id' => $carModel->id,
            'car_brand_id' => $carModel->brand_id,
            'car_color_id' => $carColor->id,
        ]);

        $driver->car_id = $car->id;
        $driver->save();
    }
}
