<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class GuidemembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
         DB::table('guidemembers')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'tel' => $faker->phoneNumber,
            'address'=>$faker->address,
            'id_guide'=>$faker->creditCardNumber,

       		 ]);
        }
    }
}
