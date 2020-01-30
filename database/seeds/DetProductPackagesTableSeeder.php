<?php

use Illuminate\Database\Seeder;

class DetProductPackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_product_packages')->delete();
        
        \DB::table('det_product_packages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cant' => NULL,
                'packages_id' => 1,
                'products_id' => 8,
            ),
            1 => 
            array (
                'id' => 2,
                'cant' => NULL,
                'packages_id' => 1,
                'products_id' => 9,
            ),
            2 => 
            array (
                'id' => 3,
                'cant' => NULL,
                'packages_id' => 1,
                'products_id' => 10,
            ),
            3 => 
            array (
                'id' => 4,
                'cant' => NULL,
                'packages_id' => 2,
                'products_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'cant' => NULL,
                'packages_id' => 2,
                'products_id' => 4,
            ),
            5 => 
            array (
                'id' => 6,
                'cant' => NULL,
                'packages_id' => 2,
                'products_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'cant' => NULL,
                'packages_id' => 2,
                'products_id' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'cant' => NULL,
                'packages_id' => 2,
                'products_id' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                'cant' => NULL,
                'packages_id' => 2,
                'products_id' => 7,
            ),
            9 => 
            array (
                'id' => 10,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 8,
            ),
            10 => 
            array (
                'id' => 11,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 9,
            ),
            11 => 
            array (
                'id' => 12,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 10,
            ),
            12 => 
            array (
                'id' => 13,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 5,
            ),
            17 => 
            array (
                'id' => 18,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 6,
            ),
            18 => 
            array (
                'id' => 19,
                'cant' => NULL,
                'packages_id' => 3,
                'products_id' => 7,
            ),
            19 => 
            array (
                'id' => 20,
                'cant' => NULL,
                'packages_id' => 4,
                'products_id' => 9,
            ),
            20 => 
            array (
                'id' => 21,
                'cant' => NULL,
                'packages_id' => 4,
                'products_id' => 10,
            ),
            21 => 
            array (
                'id' => 22,
                'cant' => NULL,
                'packages_id' => 4,
                'products_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'cant' => NULL,
                'packages_id' => 6,
                'products_id' => 8,
            ),
            23 => 
            array (
                'id' => 24,
                'cant' => NULL,
                'packages_id' => 6,
                'products_id' => 9,
            ),
            24 => 
            array (
                'id' => 25,
                'cant' => NULL,
                'packages_id' => 6,
                'products_id' => 7,
            ),
            25 => 
            array (
                'id' => 26,
                'cant' => NULL,
                'packages_id' => 7,
                'products_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'cant' => NULL,
                'packages_id' => 7,
                'products_id' => 5,
            ),
            27 => 
            array (
                'id' => 28,
                'cant' => NULL,
                'packages_id' => 7,
                'products_id' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'cant' => NULL,
                'packages_id' => 8,
                'products_id' => 8,
            ),
            29 => 
            array (
                'id' => 30,
                'cant' => NULL,
                'packages_id' => 8,
                'products_id' => 9,
            ),
            30 => 
            array (
                'id' => 31,
                'cant' => NULL,
                'packages_id' => 8,
                'products_id' => 1,
            ),
        ));
        
        
    }
}