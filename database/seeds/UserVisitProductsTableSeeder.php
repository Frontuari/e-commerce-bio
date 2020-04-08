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
                'id' => 22,
                'products_id' => 20,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:44:45',
                'updated_at' => '2020-04-03 18:44:45',
            ),
            1 => 
            array (
                'id' => 28,
                'products_id' => 17,
                'users_id' => 16,
                'created_at' => '2020-04-03 19:47:10',
                'updated_at' => '2020-04-03 19:47:10',
            ),
            2 => 
            array (
                'id' => 27,
                'products_id' => 15,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:48:41',
                'updated_at' => '2020-04-04 19:37:55',
            ),
            3 => 
            array (
                'id' => 29,
                'products_id' => 12,
                'users_id' => 16,
                'created_at' => '2020-04-04 19:10:27',
                'updated_at' => '2020-04-04 23:38:29',
            ),
            4 => 
            array (
                'id' => 30,
                'products_id' => 10,
                'users_id' => 16,
                'created_at' => '2020-04-04 19:11:17',
                'updated_at' => '2020-04-05 11:06:41',
            ),
            5 => 
            array (
                'id' => 32,
                'products_id' => 16,
                'users_id' => 16,
                'created_at' => '2020-04-05 09:56:52',
                'updated_at' => '2020-04-06 12:50:19',
            ),
            6 => 
            array (
                'id' => 2,
                'products_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-04-03 19:35:36',
                'updated_at' => '2020-04-06 12:58:54',
            ),
            7 => 
            array (
                'id' => 26,
                'products_id' => 14,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:48:38',
                'updated_at' => '2020-04-06 13:56:57',
            ),
            8 => 
            array (
                'id' => 35,
                'products_id' => 7,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:04:02',
                'updated_at' => '2020-04-06 18:53:40',
            ),
            9 => 
            array (
                'id' => 1,
                'products_id' => 9,
                'users_id' => 16,
                'created_at' => '2020-04-03 19:29:20',
                'updated_at' => '2020-04-06 18:53:41',
            ),
            10 => 
            array (
                'id' => 24,
                'products_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:45:14',
                'updated_at' => '2020-04-06 18:53:43',
            ),
            11 => 
            array (
                'id' => 34,
                'products_id' => 3,
                'users_id' => 16,
                'created_at' => '2020-04-06 12:59:06',
                'updated_at' => '2020-04-06 21:10:30',
            ),
            12 => 
            array (
                'id' => 25,
                'products_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:48:14',
                'updated_at' => '2020-04-06 22:44:20',
            ),
            13 => 
            array (
                'id' => 37,
                'products_id' => 13,
                'users_id' => 18,
                'created_at' => '2020-04-08 13:46:02',
                'updated_at' => '2020-04-08 13:49:08',
            ),
            14 => 
            array (
                'id' => 36,
                'products_id' => 6,
                'users_id' => 18,
                'created_at' => '2020-04-08 13:46:02',
                'updated_at' => '2020-04-08 13:49:08',
            ),
            15 => 
            array (
                'id' => 31,
                'products_id' => 19,
                'users_id' => 16,
                'created_at' => '2020-04-04 23:02:57',
                'updated_at' => '2020-04-07 16:50:52',
            ),
            16 => 
            array (
                'id' => 23,
                'products_id' => 13,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:44:51',
                'updated_at' => '2020-04-08 13:40:13',
            ),
            17 => 
            array (
                'id' => 33,
                'products_id' => 6,
                'users_id' => 16,
                'created_at' => '2020-04-06 12:32:43',
                'updated_at' => '2020-04-08 13:42:12',
            ),
        ));
        
        
    }
}