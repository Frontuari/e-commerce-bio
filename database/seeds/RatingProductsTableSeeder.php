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
                'id' => 12,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 5,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 14,
                'rating' => 3,
                'opinion' => NULL,
                'products_id' => 19,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 15,
                'rating' => 2,
                'opinion' => NULL,
                'products_id' => 4,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 17,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 14,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 18,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 18,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 20,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 15,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 22,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 13,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 23,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 12,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 24,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 9,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 25,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 8,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 26,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 1,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 30,
                'rating' => 3,
                'opinion' => NULL,
                'products_id' => 3,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 31,
                'rating' => 3,
                'opinion' => NULL,
                'products_id' => 10,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 32,
                'rating' => 3,
                'opinion' => NULL,
                'products_id' => 16,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 35,
                'rating' => 1,
                'opinion' => NULL,
                'products_id' => 17,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 36,
                'rating' => 4,
                'opinion' => NULL,
                'products_id' => 6,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 37,
                'rating' => 4,
                'opinion' => NULL,
                'products_id' => 20,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 38,
                'rating' => 5,
                'opinion' => NULL,
                'products_id' => 7,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}