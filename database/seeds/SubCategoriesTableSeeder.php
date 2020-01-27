<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_categories')->delete();
        
        \DB::table('sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Juguetes',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}