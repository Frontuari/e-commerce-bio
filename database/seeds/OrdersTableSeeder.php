<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 11,
                'sub_total' => '1000.000000',
                'total_pay' => '2000000.000000',
                'total_tax' => '1000.000000',
                'total_packaging' => '1000.000000',
                'total_transport' => '1000.000000',
                'order_address_id' => 1,
                'transports_id' => 1,
                'user_rating' => 5,
                'delivery_time_date' => '2020-01-28 00:00:00',
                'discount' => NULL,
                'packagings_id' => 1,
                'currency_rate' => '80000.000000',
                'opinion' => 'Hola',
                'coins_id' => 1,
                'created_at' => '2020-01-21 17:31:00',
                'updated_at' => '2020-01-30 00:26:37',
                'status' => 'EN',
            ),
        ));
        
        
    }
}