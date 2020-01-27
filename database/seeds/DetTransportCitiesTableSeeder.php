<?php

use Illuminate\Database\Seeder;

class DetTransportCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_transport_cities')->delete();
        
        \DB::table('det_transport_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'transports_id' => 1,
                'cities_id' => 1,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'transports_id' => 1,
                'cities_id' => 2,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}