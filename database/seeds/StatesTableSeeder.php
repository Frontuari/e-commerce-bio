<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Portuguesa',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-23 21:41:40',
            ),
        ));
        
        
    }
}