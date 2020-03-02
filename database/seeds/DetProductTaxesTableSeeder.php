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
                'taxes_id' => 1,
                'products_id' => 1,
            ),
            1 => 
            array (
                'taxes_id' => 1,
                'products_id' => 2,
            ),
            2 => 
            array (
                'taxes_id' => 1,
                'products_id' => 3,
            ),
            3 => 
            array (
                'taxes_id' => 1,
                'products_id' => 4,
            ),
            4 => 
            array (
                'taxes_id' => 1,
                'products_id' => 5,
            ),
            5 => 
            array (
                'taxes_id' => 1,
                'products_id' => 6,
            ),
            6 => 
            array (
                'taxes_id' => 1,
                'products_id' => 7,
            ),
            7 => 
            array (
                'taxes_id' => 1,
                'products_id' => 8,
            ),
            8 => 
            array (
                'taxes_id' => 1,
                'products_id' => 9,
            ),
            9 => 
            array (
                'taxes_id' => 1,
                'products_id' => 10,
            ),
            10 => 
            array (
                'taxes_id' => 1,
                'products_id' => 12,
            ),
        ));
        
        
    }
}