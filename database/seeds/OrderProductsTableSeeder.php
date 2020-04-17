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
                'cant' => 2,
                'price' => '60937.500000',
                'total' => '60937.500000',
                'orders' => 1,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 786,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'cant' => 2,
                'price' => '128562.500000',
                'total' => '128562.500000',
                'orders' => 2,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 769,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'cant' => 2,
                'price' => '1179759.010000',
                'total' => '1179759.010000',
                'orders' => 2,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 883,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'cant' => 1,
                'price' => '212500.000000',
                'total' => '212500.000000',
                'orders' => 2,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 905,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'cant' => 2,
                'price' => '115200.000000',
                'total' => '115200.000000',
                'orders' => 3,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 666,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'cant' => 2,
                'price' => '102400.000000',
                'total' => '102400.000000',
                'orders' => 4,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1020,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'cant' => 2,
                'price' => '56666.670000',
                'total' => '56666.670000',
                'orders' => 5,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 696,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'cant' => 1,
                'price' => '115200.000000',
                'total' => '115200.000000',
                'orders' => 6,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 666,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'cant' => 2,
                'price' => '118125.000000',
                'total' => '118125.000000',
                'orders' => 7,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1248,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'cant' => 1,
                'price' => '1631990.000000',
                'total' => '1631990.000000',
                'orders' => 8,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1246,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'cant' => 1,
                'price' => '141606.840000',
                'total' => '141606.840000',
                'orders' => 9,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1234,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'cant' => 2,
                'price' => '159415.440000',
                'total' => '159415.440000',
                'orders' => 9,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1254,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'cant' => 2,
                'price' => '116635.680000',
                'total' => '116635.680000',
                'orders' => 10,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 649,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'cant' => 1,
                'price' => '249840.000000',
                'total' => '249840.000000',
                'orders' => 11,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 833,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'cant' => 1,
                'price' => '18207.860000',
                'total' => '18207.860000',
                'orders' => 12,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'cant' => 2,
                'price' => '18207.860000',
                'total' => '18207.860000',
                'orders' => 13,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'cant' => 2,
                'price' => '159415.440000',
                'total' => '159415.440000',
                'orders' => 14,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1254,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'cant' => 1,
                'price' => '169926.650000',
                'total' => '169926.650000',
                'orders' => 15,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1021,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'cant' => 2,
                'price' => '241714.290000',
                'total' => '241714.290000',
                'orders' => 16,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 937,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'cant' => 1,
                'price' => '175657.140000',
                'total' => '175657.140000',
                'orders' => 17,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1037,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'cant' => 3,
                'price' => '159415.440000',
                'total' => '159415.440000',
                'orders' => 18,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1254,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'cant' => 2,
                'price' => '117293.400000',
                'total' => '117293.400000',
                'orders' => 19,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 938,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'cant' => 1,
                'price' => '241714.290000',
                'total' => '241714.290000',
                'orders' => 20,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 937,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'cant' => 2,
                'price' => '153944.990000',
                'total' => '153944.990000',
                'orders' => 21,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 672,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'cant' => 2,
                'price' => '200466.200000',
                'total' => '200466.200000',
                'orders' => 22,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 990,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'cant' => 2,
                'price' => '117293.400000',
                'total' => '117293.400000',
                'orders' => 23,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 938,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'cant' => 2,
                'price' => '18207.860000',
                'total' => '18207.860000',
                'orders' => 24,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'cant' => 2,
                'price' => '153944.990000',
                'total' => '153944.990000',
                'orders' => 25,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 672,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'cant' => 3,
                'price' => '177204.550000',
                'total' => '177204.550000',
                'orders' => 26,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 792,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'cant' => 2,
                'price' => '117293.400000',
                'total' => '117293.400000',
                'orders' => 26,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 938,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'cant' => 2,
                'price' => '112470.120000',
                'total' => '112470.120000',
                'orders' => 27,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1032,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}