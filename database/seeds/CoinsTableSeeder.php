<?php

use Illuminate\Database\Seeder;

class CoinsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coins')->delete();
        
        \DB::table('coins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'USD',
                'symbol' => '$',
                'status' => 'A',
                'rate' => '81000.000000000',
                'coins_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bolívares',
                'symbol' => 'Bs',
                'status' => 'A',
                'rate' => '1.000000000',
                'coins_id' => NULL,
                'created_at' => '2020-01-24 16:04:24',
                'updated_at' => '2020-01-24 16:04:24',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Bitcoin',
                'symbol' => 'BTC',
                'status' => 'A',
                'rate' => '650000000.000000000',
                'coins_id' => NULL,
                'created_at' => '2020-01-24 19:45:35',
                'updated_at' => '2020-01-24 19:48:30',
            ),
        ));
        
        
    }
}