<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RateSeeder::class);
         $this->call(CarModelSeeder::class);
         $this->call(UserSeeder::class);
    }
}
