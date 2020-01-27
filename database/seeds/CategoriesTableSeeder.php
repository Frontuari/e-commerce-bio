<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Frutas y Hortalizas',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => 'category-1',
                'status' => 'A',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-24 18:51:03',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'Bodegón',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => 1,
                'order' => 1,
                'slug' => 'bodegon',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-24 18:51:10',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Pescaderia',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => 'category-2',
                'status' => 'A',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-24 18:51:39',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Charcuteria y quesos',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:12',
                'updated_at' => '2020-01-24 18:52:12',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Lácteos jugos y embutidos',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:41',
                'updated_at' => '2020-01-24 18:52:41',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Congelados',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:55',
                'updated_at' => '2020-01-24 18:52:55',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Cuidado personal',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:53:03',
                'updated_at' => '2020-01-24 18:53:03',
            ),
        ));
        
        
    }
}