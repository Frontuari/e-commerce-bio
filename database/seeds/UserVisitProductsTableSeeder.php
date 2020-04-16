<?php

use Illuminate\Database\Seeder;

class UserVisitProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_visit_products')->delete();
        
        \DB::table('user_visit_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'products_id' => 833,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:13:24',
                'updated_at' => '2020-04-13 16:13:28',
            ),
            1 => 
            array (
                'id' => 2,
                'products_id' => 1047,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:32:55',
                'updated_at' => '2020-04-13 16:33:59',
            ),
            2 => 
            array (
                'id' => 3,
                'products_id' => 990,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:34:51',
                'updated_at' => '2020-04-13 16:34:53',
            ),
            3 => 
            array (
                'id' => 4,
                'products_id' => 693,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:34:58',
                'updated_at' => '2020-04-13 16:35:01',
            ),
            4 => 
            array (
                'id' => 5,
                'products_id' => 672,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:35:44',
                'updated_at' => '2020-04-13 16:35:49',
            ),
            5 => 
            array (
                'id' => 6,
                'products_id' => 792,
                'users_id' => 16,
                'created_at' => '2020-04-13 16:36:31',
                'updated_at' => '2020-04-13 16:36:31',
            ),
            6 => 
            array (
                'id' => 7,
                'products_id' => 905,
                'users_id' => 20,
                'created_at' => '2020-04-16 09:39:19',
                'updated_at' => '2020-04-16 10:07:14',
            ),
            7 => 
            array (
                'id' => 10,
                'products_id' => 766,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:12:57',
                'updated_at' => '2020-04-16 11:14:23',
            ),
            8 => 
            array (
                'id' => 12,
                'products_id' => 1000,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:17:51',
                'updated_at' => '2020-04-16 11:20:24',
            ),
            9 => 
            array (
                'id' => 13,
                'products_id' => 998,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:23:44',
                'updated_at' => '2020-04-16 11:27:22',
            ),
            10 => 
            array (
                'id' => 9,
                'products_id' => 843,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:11:21',
                'updated_at' => '2020-04-16 11:27:51',
            ),
            11 => 
            array (
                'id' => 14,
                'products_id' => 666,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:27:52',
                'updated_at' => '2020-04-16 11:27:54',
            ),
            12 => 
            array (
                'id' => 11,
                'products_id' => 973,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:17:46',
                'updated_at' => '2020-04-16 11:27:57',
            ),
            13 => 
            array (
                'id' => 15,
                'products_id' => 696,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:28:00',
                'updated_at' => '2020-04-16 11:28:02',
            ),
            14 => 
            array (
                'id' => 8,
                'products_id' => 1002,
                'users_id' => 20,
                'created_at' => '2020-04-16 11:00:43',
                'updated_at' => '2020-04-16 11:30:00',
            ),
        ));
        
        
    }
}