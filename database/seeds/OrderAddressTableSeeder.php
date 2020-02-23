<?php

use Illuminate\Database\Seeder;

class OrderAddressTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_address')->delete();
        
        \DB::table('order_address')->insert(array (
            0 => 
            array (
                'id' => 2,
                'cities_id' => 1,
                'address' => 'Urb. la virginia calle 2 av 3 casa 11 A',
                'status' => 'A',
                'users_id' => 16,
                'created_at' => '2020-02-23 21:39:56',
                'updated_at' => '2020-02-23 21:39:56',
            ),
            1 => 
            array (
                'id' => 3,
                'cities_id' => 26,
                'address' => 'Urb. Villa real calle2 casa 25',
                'status' => 'A',
                'users_id' => 16,
                'created_at' => '2020-02-23 21:40:22',
                'updated_at' => '2020-02-23 21:40:22',
            ),
            2 => 
            array (
                'id' => 1,
                'cities_id' => 1,
                'address' => 'Urb. las virginias calle 2 av 3',
                'status' => 'A',
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => '2020-02-23 21:54:58',
            ),
        ));
        
        
    }
}