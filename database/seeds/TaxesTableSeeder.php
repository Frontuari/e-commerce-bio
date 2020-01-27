<?php

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxes')->delete();
        
        \DB::table('taxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'short_name' => 'IVA',
                'name' => 'impuesto sobre la renta',
                'value' => '0.160000',
                'type' => 'porc',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}