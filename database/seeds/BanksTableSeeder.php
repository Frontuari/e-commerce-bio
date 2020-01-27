<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banks')->delete();
        
        \DB::table('banks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Banesco Banco Universal',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Banco de Venezuela',
                'status' => 'A',
                'created_at' => '2020-01-24 16:14:14',
                'updated_at' => '2020-01-24 16:14:14',
            ),
        ));
        
        
    }
}