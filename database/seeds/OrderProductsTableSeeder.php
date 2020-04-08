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
            3 => 
            array (
                'id' => 4,
                'cant' => 1,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 22,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'cant' => 1,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 22,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'cant' => 1,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 23,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'cant' => 3,
                'price' => '10000000.000000',
                'total' => '10000000.000000',
                'orders' => 23,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'cant' => 1,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 24,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'cant' => 3,
                'price' => '10000000.000000',
                'total' => '10000000.000000',
                'orders' => 24,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'cant' => 1,
                'price' => '10000000.000000',
                'total' => '10000000.000000',
                'orders' => 25,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 10,
                'cant' => 3,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 25,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 20,
                'cant' => 2,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 34,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 21,
                'cant' => 1,
                'price' => '300000.000000',
                'total' => '300000.000000',
                'orders' => 34,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}