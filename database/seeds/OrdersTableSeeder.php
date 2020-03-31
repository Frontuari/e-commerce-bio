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
                'id' => 15,
                'sub_total' => '100.000000',
                'total_pay' => '200.000000',
                'total_tax' => '20.000000',
                'total_packaging' => '50.000000',
                'total_transport' => '0.000000',
                'order_address_id' => 1,
                'transports_id' => 1,
                'user_rating' => 0,
                'delivery_time_date' => '2020-01-28 00:00:00',
                'discount' => NULL,
                'packagings_id' => 1,
                'currency_rate' => '74000.000000',
                'opinion' => NULL,
                'coins_id' => 1,
                'created_at' => '2020-01-31 15:59:55',
                'updated_at' => '2020-01-31 15:59:55',
                'status' => 'NU',
            ),
            1 => 
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
                'status' => 'NU',
            ),
            2 => 
            array (
                'id' => 13,
                'sub_total' => '100.000000',
                'total_pay' => '200.000000',
                'total_tax' => '20.000000',
                'total_packaging' => '50.000000',
                'total_transport' => '0.000000',
                'order_address_id' => 1,
                'transports_id' => 1,
                'user_rating' => 0,
                'delivery_time_date' => '2020-01-28 00:00:00',
                'discount' => NULL,
                'packagings_id' => 1,
                'currency_rate' => '74000.000000',
                'opinion' => NULL,
                'coins_id' => 1,
                'created_at' => '2019-01-20 15:52:19',
                'updated_at' => '2020-01-31 15:52:19',
                'status' => 'NU',
            ),
            3 => 
            array (
                'id' => 14,
                'sub_total' => '100.000000',
                'total_pay' => '200.000000',
                'total_tax' => '20.000000',
                'total_packaging' => '50.000000',
                'total_transport' => '0.000000',
                'order_address_id' => 1,
                'transports_id' => 1,
                'user_rating' => 0,
                'delivery_time_date' => '2020-01-28 00:00:00',
                'discount' => NULL,
                'packagings_id' => 1,
                'currency_rate' => '74000.000000',
                'opinion' => NULL,
                'coins_id' => 1,
                'created_at' => '2019-05-31 15:53:31',
                'updated_at' => '2020-01-31 15:53:31',
                'status' => 'NU',
            ),
        ));
        
        
    }
}