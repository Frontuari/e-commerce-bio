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
                'products_id' => 22,
                'users_id' => 16,
                'created_at' => '2020-04-13 12:55:49',
                'updated_at' => '2020-04-13 12:55:50',
            ),
            1 => 
            array (
                'id' => 2,
                'products_id' => 228,
                'users_id' => 16,
                'created_at' => '2020-04-13 12:55:53',
                'updated_at' => '2020-04-13 12:55:55',
            ),
            2 => 
            array (
                'id' => 3,
                'products_id' => 615,
                'users_id' => 16,
                'created_at' => '2020-04-13 12:56:00',
                'updated_at' => '2020-04-13 12:56:02',
            ),
        ));
        
        
    }
}