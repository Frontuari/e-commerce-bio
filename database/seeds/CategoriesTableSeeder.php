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
                'id' => 5,
                'name' => 'Chocolates, Cereales y Snacks',
                'description' => NULL,
                'image' => 'categories\\February2020\\DfirzC3BhKdfhHnz0SA4.png',
                'parent_id' => NULL,
                'order' => 2,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:12',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'Víveres',
                'description' => NULL,
                'image' => 'categories\\February2020\\tiGuKqmX0lUpnHtHGyAd.png',
                'parent_id' => 1,
                'order' => 3,
                'slug' => 'bodegon',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-02-26 00:50:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Verduras, Frutas y Hortalizas',
                'description' => NULL,
                'image' => 'categories\\February2020\\1jJfl6Shu0VePRaA9THq.png',
                'parent_id' => NULL,
                'order' => 4,
                'slug' => 'category-1',
                'status' => 'A',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Aseo del Hogar',
                'description' => NULL,
                'image' => 'categories\\February2020\\oG3tNTJS0OwZekteXzmi.png',
                'parent_id' => NULL,
                'order' => 5,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:28:12',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            4 => 
            array (
                'id' => 4,
                'name' => 'Cuidado Personal',
                'description' => NULL,
                'image' => 'categories\\February2020\\EMZp0unLv7XI4D7ZrNrP.png',
                'parent_id' => NULL,
                'order' => 6,
                'slug' => 'category-2',
                'status' => 'A',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Bebidas',
                'description' => NULL,
                'image' => 'categories\\February2020\\EovG8Z2U3goPYp08xMn1.png',
                'parent_id' => NULL,
                'order' => 7,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:53:03',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Bodegón',
                'description' => NULL,
                'image' => 'categories\\February2020\\TIMFOaH09dDOC8iRoXrp.png',
                'parent_id' => NULL,
                'order' => 8,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:55',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Quesos y Charcutería',
                'description' => NULL,
                'image' => 'categories\\February2020\\YWtWOOWr96DbMQwY41Cr.png',
                'parent_id' => NULL,
                'order' => 9,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:29:17',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Pollo y Carnes',
                'description' => NULL,
                'image' => 'categories\\February2020\\wVQFphslA7992TI0pzOe.png',
                'parent_id' => NULL,
                'order' => 10,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:29:30',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            9 => 
            array (
                'id' => 9,
                'name' => 'Mascotas',
                'description' => NULL,
                'image' => 'categories\\February2020\\k5R0nCt4HLMepQ5Qncby.png',
                'parent_id' => NULL,
                'order' => 11,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:28:51',
                'updated_at' => '2020-02-26 00:50:34',
            ),
            10 => 
            array (
                'id' => 6,
                'name' => 'Hogar y juguetes',
                'description' => NULL,
                'image' => 'categories\\February2020\\SqKdpZ6K3LBVFD9CDy4K.png',
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:41',
                'updated_at' => '2020-02-26 00:50:34',
            ),
        ));
        
        
    }
}