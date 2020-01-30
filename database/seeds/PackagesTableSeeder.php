<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packages')->delete();
        
        \DB::table('packages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Combo bio',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 12:37:32',
                'updated_at' => '2020-01-30 12:38:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Combo bio 2',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 12:40:20',
                'updated_at' => '2020-01-30 12:40:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Combo bio 3',
                'discount' => '0.000000',
                'status' => 'A',
                'created_at' => '2020-01-30 12:40:51',
                'updated_at' => '2020-01-30 12:40:51',
            ),
        ));
        
        
    }
}