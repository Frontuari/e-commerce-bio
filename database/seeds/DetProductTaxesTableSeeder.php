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
                'id' => 2,
                'taxes_id' => 1,
                'products_id' => 2,
            ),
            1 => 
            array (
                'id' => 3,
                'taxes_id' => 1,
                'products_id' => 13,
            ),
        ));
        
        
    }
}