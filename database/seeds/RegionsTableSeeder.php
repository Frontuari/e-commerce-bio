<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Paez',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Araure',
                'status' => 'A',
                'states_id' => 1,
                'created_at' => '2020-01-24 03:11:33',
                'updated_at' => '2020-01-24 03:11:33',
            ),
        ));
        
        
    }
}