<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peoples')->delete();
        
        \DB::table('peoples')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rif' => 'V-18671986',
                'name' => 'Leonardo',
                'sex' => 'm',
                'birthdate' => '1988-07-20',
                'phone' => '04145138790 ',
                'cities_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-01-27 00:41:41',
            ),
        ));
        
        
    }
}