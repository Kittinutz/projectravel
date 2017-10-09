<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
         DB::table('trips')->insert([
            'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $faker->email,
            'creater_id' => $faker->numberBetween($min = 1, $max = 10),
            'location' => $faker->city ,
            'catagories_id'=>$faker->numberBetween($min = 1, $max = 10),
            'price'=>$faker->numberBetween($min = 100, $max = 1000),

       		 ]);
        }
    }
}
