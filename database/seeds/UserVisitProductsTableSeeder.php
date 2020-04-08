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
                'id' => 23,
                'products_id' => 13,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:44:51',
                'updated_at' => '2020-04-03 18:45:06',
            ),
            2 => 
            array (
                'id' => 24,
                'products_id' => 8,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:45:14',
                'updated_at' => '2020-04-03 18:48:16',
            ),
            3 => 
            array (
                'id' => 25,
                'products_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:48:14',
                'updated_at' => '2020-04-03 18:48:37',
            ),
            4 => 
            array (
                'id' => 26,
                'products_id' => 14,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:48:38',
                'updated_at' => '2020-04-03 18:48:39',
            ),
            5 => 
            array (
                'id' => 27,
                'products_id' => 15,
                'users_id' => 16,
                'created_at' => '2020-04-03 18:48:41',
                'updated_at' => '2020-04-03 18:48:41',
            ),
        ));
        
        
    }
}