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
                'id' => 1,
                'cities_id' => 1,
                'address' => 'Urb. las virginias calle 2 av 3',
                'status' => 'A',
                'users_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}