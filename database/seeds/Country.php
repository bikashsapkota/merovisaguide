<?php


use Illuminate\Database\Seeder;

class Country extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    
    	$faker = Faker\Factory::create();

    	for($i = 0; $i< 10; $i++){

    		DB::table('countries')->insert([
    			'name' => $faker->country,
    			'description' => 'description',
    			'short_name' => 'np',
    			'phone_code' => '197',
    		]);

    	}
    }
}
