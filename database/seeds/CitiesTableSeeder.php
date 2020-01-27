<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Acarigua',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2020-01-24 12:59:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Capital paez',
                'status' => 'A',
                'regions_id' => 2,
                'created_at' => '2020-01-24 12:59:57',
                'updated_at' => '2020-01-24 13:00:03',
            ),
        ));
        
        
    }
}