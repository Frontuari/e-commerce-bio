<?php

use Illuminate\Database\Seeder;

class PackagingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packagings')->delete();
        
        \DB::table('packagings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bolsas',
                'value' => '10000.000000',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Cajas',
                'value' => '100000.000000',
                'status' => 'A',
                'created_at' => '2020-01-24 16:13:56',
                'updated_at' => '2020-01-24 16:13:56',
            ),
        ));
        
        
    }
}