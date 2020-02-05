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
                'id' => 5,
                'name' => 'Refrescos',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 8,
                'created_at' => '2020-01-29 17:09:44',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 2,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Harina de Maíz',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 15:38:58',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 3,
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'Leche en polvo',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 4,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Licores',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 8,
                'created_at' => '2020-01-29 17:12:23',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 5,
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Arroz, granos y pastas',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 17:21:29',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 6,
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Juguetes',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 6,
                'created_at' => '2020-01-29 17:32:35',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 7,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Salsas',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 17:16:04',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 8,
            ),
            7 => 
            array (
                'id' => 3,
                'name' => 'Aceites',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 15:35:17',
                'updated_at' => '2020-02-05 11:47:41',
                'position' => 1,
            ),
        ));
        
        
    }
}