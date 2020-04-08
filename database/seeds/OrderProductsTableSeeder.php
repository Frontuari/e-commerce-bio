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
            13 => 
            array (
                'id' => 22,
                'cant' => 2,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 35,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 23,
                'cant' => 3,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 35,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 24,
                'cant' => 2,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 35,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 25,
                'cant' => 1,
                'price' => '400000.000000',
                'total' => '400000.000000',
                'orders' => 36,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 26,
                'cant' => 1,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 37,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 27,
                'cant' => 3,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 38,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 28,
                'cant' => 3,
                'price' => '2000000.000000',
                'total' => '2320000.000000',
                'orders' => 39,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 29,
                'cant' => 2,
                'price' => '125800.500000',
                'total' => '145928.580000',
                'orders' => 40,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 30,
                'cant' => 2,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 41,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 31,
                'cant' => 2,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 42,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 32,
                'cant' => 2,
                'price' => '3000000.000000',
                'total' => '3000000.000000',
                'orders' => 43,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 33,
                'cant' => 2,
                'price' => '3000000.000000',
                'total' => '3000000.000000',
                'orders' => 44,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 34,
                'cant' => 2,
                'price' => '1000000.000000',
                'total' => '1000000.000000',
                'orders' => 44,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 35,
                'cant' => 2,
                'price' => '1000000.000000',
                'total' => '1000000.000000',
                'orders' => 45,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 36,
                'cant' => 2,
                'price' => '2000000.000000',
                'total' => '2320000.000000',
                'orders' => 45,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 37,
                'cant' => 2,
                'price' => '1000000.000000',
                'total' => '1000000.000000',
                'orders' => 46,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 38,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 46,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 39,
                'cant' => 2,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 47,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 40,
                'cant' => 1,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 47,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 41,
                'cant' => 1,
                'price' => '300000.000000',
                'total' => '348000.000000',
                'orders' => 47,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 42,
                'cant' => 1,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 47,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 43,
                'cant' => 2,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 48,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 44,
                'cant' => 2,
                'price' => '3000000.000000',
                'total' => '3000000.000000',
                'orders' => 49,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 45,
                'cant' => 2,
                'price' => '90000.000000',
                'total' => '104400.000000',
                'orders' => 50,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 46,
                'cant' => 2,
                'price' => '300000.000000',
                'total' => '348000.000000',
                'orders' => 51,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 47,
                'cant' => 3,
                'price' => '50000.000000',
                'total' => '58000.000000',
                'orders' => 52,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 48,
                'cant' => 2,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 53,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 49,
                'cant' => 2,
                'price' => '125800.500000',
                'total' => '145928.580000',
                'orders' => 54,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 50,
                'cant' => 2,
                'price' => '125800.500000',
                'total' => '145928.580000',
                'orders' => 55,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 51,
                'cant' => 2,
                'price' => '125800.500000',
                'total' => '145928.580000',
                'orders' => 56,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 52,
                'cant' => 2,
                'price' => '50000.000000',
                'total' => '58000.000000',
                'orders' => 56,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 53,
                'cant' => 2,
                'price' => '125800.500000',
                'total' => '145928.580000',
                'orders' => 57,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 54,
                'cant' => 2,
                'price' => '50000.000000',
                'total' => '58000.000000',
                'orders' => 57,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 55,
                'cant' => 2,
                'price' => '50000.000000',
                'total' => '58000.000000',
                'orders' => 58,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 56,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 58,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 57,
                'cant' => 1,
                'price' => '50000.000000',
                'total' => '58000.000000',
                'orders' => 59,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 58,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 59,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 59,
                'cant' => 2,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 60,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 60,
                'cant' => 2,
                'price' => '300000.000000',
                'total' => '348000.000000',
                'orders' => 61,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 61,
                'cant' => 2,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 61,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 62,
                'cant' => 2,
                'price' => '300000.000000',
                'total' => '348000.000000',
                'orders' => 62,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 63,
                'cant' => 2,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 62,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 64,
                'cant' => 2,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 63,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 65,
                'cant' => 2,
                'price' => '2000000.000000',
                'total' => '2000000.000000',
                'orders' => 64,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 66,
                'cant' => 1,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 67,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 67,
                'cant' => 2,
                'price' => '100000.000000',
                'total' => '116000.000000',
                'orders' => 68,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 68,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 69,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 69,
                'cant' => 1,
                'price' => '5000000.000000',
                'total' => '5000000.000000',
                'orders' => 70,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 70,
                'cant' => 1,
                'price' => '2000000.000000',
                'total' => '2000000.000000',
                'orders' => 71,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 71,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 72,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 72,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 73,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 73,
                'cant' => 2,
                'price' => '2000000.000000',
                'total' => '2000000.000000',
                'orders' => 74,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 74,
                'cant' => 1,
                'price' => '2000000.000000',
                'total' => '2000000.000000',
                'orders' => 75,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 75,
                'cant' => 2,
                'price' => '2000000.000000',
                'total' => '2000000.000000',
                'orders' => 76,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 76,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 77,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 77,
                'cant' => 1,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 78,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 78,
                'cant' => 1,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 79,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 79,
                'cant' => 2,
                'price' => '500000.000000',
                'total' => '580000.000000',
                'orders' => 80,
                'deduction' => '0.000000',
                'cod_combo' => NULL,
                'products_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}