<?php

use Illuminate\Database\Seeder;

class RatingProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rating_products')->delete();
        
        \DB::table('rating_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rating' => 5,
                'opinion' => 'Muy buen producto lo recomiendo',
                'products_id' => 1,
                'users_id' => 13,
                'created_at' => '2020-01-24 16:15:45',
                'updated_at' => '2020-01-24 16:15:45',
            ),
        ));
        
        
    }
}