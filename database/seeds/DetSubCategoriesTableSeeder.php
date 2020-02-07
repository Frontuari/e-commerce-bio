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
        ));
        
        
    }
}