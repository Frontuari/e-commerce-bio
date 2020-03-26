<?php

use Illuminate\Database\Seeder;

class DetProductTaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_product_taxes')->delete();
        
        \DB::table('det_product_taxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'taxes_id' => 1,
                'products_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'taxes_id' => 1,
                'products_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'taxes_id' => 1,
                'products_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'taxes_id' => 1,
                'products_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'taxes_id' => 1,
                'products_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'taxes_id' => 1,
                'products_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'taxes_id' => 1,
                'products_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'taxes_id' => 1,
                'products_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'taxes_id' => 1,
                'products_id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'taxes_id' => 1,
                'products_id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'taxes_id' => 1,
                'products_id' => 12,
            ),
        ));
        
        
    }
}