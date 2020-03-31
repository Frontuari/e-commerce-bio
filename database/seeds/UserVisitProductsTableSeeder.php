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
                'id' => 3,
                'products_id' => 2,
                'users_id' => 1,
                'created_at' => '2020-01-22 15:50:27',
                'updated_at' => '2020-01-22 15:50:27',
            ),
            1 => 
            array (
                'id' => 1,
                'products_id' => 1,
                'users_id' => 1,
                'created_at' => '2020-01-22 15:43:32',
                'updated_at' => '2020-01-22 16:36:06',
            ),
            2 => 
            array (
                'id' => 4,
                'products_id' => 2,
                'users_id' => 1,
                'created_at' => '2019-11-22 15:50:32',
                'updated_at' => '2020-01-20 15:50:32',
            ),
            3 => 
            array (
                'id' => 9,
                'products_id' => 7,
                'users_id' => 16,
                'created_at' => '2020-03-26 16:18:00',
                'updated_at' => '2020-03-27 11:22:47',
            ),
            4 => 
            array (
                'id' => 7,
                'products_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-03-26 15:51:47',
                'updated_at' => '2020-03-27 20:53:46',
            ),
            5 => 
            array (
                'id' => 12,
                'products_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-03-26 16:19:11',
                'updated_at' => '2020-03-26 17:17:42',
            ),
            6 => 
            array (
                'id' => 10,
                'products_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-03-26 16:18:05',
                'updated_at' => '2020-03-27 21:01:48',
            ),
            7 => 
            array (
                'id' => 13,
                'products_id' => 6,
                'users_id' => 16,
                'created_at' => '2020-03-26 16:41:29',
                'updated_at' => '2020-03-27 13:42:30',
            ),
            8 => 
            array (
                'id' => 6,
                'products_id' => 9,
                'users_id' => 16,
                'created_at' => '2020-03-26 15:51:42',
                'updated_at' => '2020-03-27 18:46:08',
            ),
            9 => 
            array (
                'id' => 5,
                'products_id' => 10,
                'users_id' => 16,
                'created_at' => '2020-03-26 15:51:39',
                'updated_at' => '2020-03-28 00:14:47',
            ),
            10 => 
            array (
                'id' => 2,
                'products_id' => 12,
                'users_id' => 16,
                'created_at' => '2020-03-26 12:18:28',
                'updated_at' => '2020-03-28 20:15:11',
            ),
            11 => 
            array (
                'id' => 11,
                'products_id' => 5,
                'users_id' => 16,
                'created_at' => '2020-03-26 16:19:04',
                'updated_at' => '2020-03-28 20:15:27',
            ),
            12 => 
            array (
                'id' => 8,
                'products_id' => 3,
                'users_id' => 16,
                'created_at' => '2020-03-26 15:55:08',
                'updated_at' => '2020-03-28 20:21:37',
            ),
        ));
        
        
    }
}