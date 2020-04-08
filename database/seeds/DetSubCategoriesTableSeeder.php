<?php

use Illuminate\Database\Seeder;

class DetSubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_sub_categories')->delete();
        
        \DB::table('det_sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'products_id' => 2,
                'sub_categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'products_id' => 2,
                'sub_categories_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'products_id' => 12,
                'sub_categories_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'products_id' => 1,
                'sub_categories_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'products_id' => 10,
                'sub_categories_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'products_id' => 9,
                'sub_categories_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'products_id' => 8,
                'sub_categories_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'products_id' => 7,
                'sub_categories_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'products_id' => 6,
                'sub_categories_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'products_id' => 5,
                'sub_categories_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'products_id' => 4,
                'sub_categories_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'products_id' => 3,
                'sub_categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'products_id' => 13,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'products_id' => 14,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'products_id' => 15,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'products_id' => 16,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'products_id' => 17,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'products_id' => 18,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'products_id' => 19,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'products_id' => 20,
                'sub_categories_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}