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
                'id' => 10,
                'name' => 'Combos',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 12,
                'created_at' => '2020-04-01 13:46:08',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 9,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Salsas',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 17:16:04',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 1,
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Juguetes',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 6,
                'created_at' => '2020-01-29 17:32:35',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 2,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Arroz, granos y pastas',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 17:21:29',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 3,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Licores',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 8,
                'created_at' => '2020-01-29 17:12:23',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 4,
            ),
            5 => 
            array (
                'id' => 1,
                'name' => 'Leche en polvo',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 5,
            ),
            6 => 
            array (
                'id' => 4,
                'name' => 'Harina de Maíz',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 1,
                'created_at' => '2020-01-29 15:38:58',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 6,
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
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 7,
            ),
            8 => 
            array (
                'id' => 5,
                'name' => 'Refrescos',
                'description' => NULL,
                'image' => NULL,
                'status' => 'A',
                'categories_id' => 8,
                'created_at' => '2020-01-29 17:09:44',
                'updated_at' => '2020-04-01 13:46:25',
                'position' => 8,
            ),
        ));
        
        
    }
}