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
        ));
        
        
    }
}