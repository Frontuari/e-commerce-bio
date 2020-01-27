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
        ));
        
        
    }
}