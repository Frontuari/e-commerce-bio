<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Harina Pan',
                'description_short' => 'Harina de Maíz Blanco',
                'description' => NULL,
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '123412343',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products/January2020/ux0Y529XSDhaqBv1yk8C.jpg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'sub_categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-01-24 21:15:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Leche Camprolac',
                'description_short' => 'Leche en Polvo Completa',
                'description' => '<p>Leche en polvo completa camprolat para adultos y ni&ntilde;os</p>',
                'price' => '200000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '12312',
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => NULL,
                'stores_id' => 1,
                'brands_id' => NULL,
                'sub_categories_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-01-27 00:33:27',
            ),
        ));
        
        
    }
}