<?php

use Illuminate\Database\Seeder;

class VisaTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('visa_types')->insert([
    			'name' => 'Student',
    			'description' => 'description',
    		],[
    			'name' => 'Dependent',
    			'description' => 'description',
    		],[
    			'name' => 'Tourist',
    			'description' => 'description',
    		]);
    }
}
