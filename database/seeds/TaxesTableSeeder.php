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
                'value' => '10.100000',
                'type' => 'porc',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-28 15:40:46',
            ),
        ));
        
        
    }
}