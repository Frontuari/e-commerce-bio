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
                'phone_home' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'rif' => '11111',
                'name' => 'Leonardo Melendez',
                'sex' => 'm',
                'birthdate' => '1990-01-01',
                'phone' => '            ',
                'cities_id' => 1,
                'created_at' => '2020-02-21 22:19:09',
                'updated_at' => '2020-02-21 22:19:09',
                'phone_home' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'rif' => 'V-18671988',
                'name' => 'papita mani',
                'sex' => 'm',
                'birthdate' => NULL,
                'phone' => '04145138790 ',
                'cities_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone_home' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'rif' => 'V-18671980',
                'name' => 'maria',
                'sex' => 'm',
                'birthdate' => NULL,
                'phone' => '04145138790 ',
                'cities_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'phone_home' => NULL,
            ),
            4 => 
            array (
                'id' => 3,
                'rif' => 'V-18671985',
                'name' => 'Francisco suares',
                'sex' => 'f',
                'birthdate' => '1988-07-20',
                'phone' => '04145138790 ',
                'cities_id' => 722,
                'created_at' => '2020-02-23 19:46:07',
                'updated_at' => '2020-02-23 21:45:40',
                'phone_home' => NULL,
            ),
        ));
        
        
    }
}