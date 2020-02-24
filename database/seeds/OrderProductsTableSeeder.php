<?php

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_products')->delete();
        
        \DB::table('order_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cant' => 1,
                'price' => '200000.000000',
                'total' => '150000.000000',
                'orders' => 11,
                'deduction' => '50000.000000',
                'cod_combo' => NULL,
                'products_id' => 2,
                'created_at' => '2020-02-24 14:43:51',
                'updated_at' => '2020-02-24 14:43:51',
            ),
            1 => 
            array (
                'id' => 2,
                'cant' => 4,
                'price' => '10000.000000',
                'total' => '40000.000000',
                'orders' => 11,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 12,
                'created_at' => '2020-02-24 14:44:15',
                'updated_at' => '2020-02-24 14:44:15',
            ),
            2 => 
            array (
                'id' => 3,
                'cant' => 1,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 13,
                'deduction' => NULL,
                'cod_combo' => NULL,
                'products_id' => 12,
                'created_at' => '2020-02-24 14:44:44',
                'updated_at' => '2020-02-24 14:44:44',
            ),
        ));
        
        
    }
}