<?php

use Illuminate\Database\Seeder;

class AdvsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('advs')->delete();
        
        \DB::table('advs')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => 'advs/January2020/DweWSS88re7gSUiKmVv8.jpg',
                'order' => 1,
                'type' => 'top',
                'created_at' => '2020-01-29 02:19:24',
                'updated_at' => '2020-01-29 02:19:24',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'left'
            ),
            1 => 
            array (
                'id' => 3,
                'image' => 'advs/January2020/MBmgwKzNo8Ag5vmebKLC.jpg',
                'order' => 2,
                'type' => 'top',
                'created_at' => '2020-01-29 02:19:34',
                'updated_at' => '2020-01-29 02:19:34',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'right'
            ),
            2 => 
            array (
                'id' => 4,
                'image' => 'advs/January2020/ivW4tVFlhXF8nGUFekx2.jpg',
                'order' => 1,
                'type' => 'medio_bajo',
                'created_at' => '2020-01-29 02:45:53',
                'updated_at' => '2020-01-29 02:48:23',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'none'
            ),
            3 => 
            array (
                'id' => 5,
                'image' => 'advs/January2020/oRfdDcKgHEWKvvJwNzN8.jpg',
                'order' => 1,
                'type' => 'footer',
                'created_at' => '2020-01-29 02:46:34',
                'updated_at' => '2020-01-29 02:48:31',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'none'
            ),
            4 => 
            array (
                'id' => 6,
                'image' => 'advs/January2020/nyF40Cml77b5L457hSCy.jpg',
                'order' => 1,
                'type' => 'medio',
                'created_at' => '2020-01-29 02:49:26',
                'updated_at' => '2020-01-29 02:49:26',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'none'
            ),
            5 => 
            array (
                'id' => 7,
                'image' => 'advs/January2020/NNuOrV3ooLFmR9gDTtJY.jpg',
                'order' => 2,
                'type' => 'medio',
                'created_at' => '2020-01-29 02:49:56',
                'updated_at' => '2020-01-29 02:49:56',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'none'
            ),
            6 => 
            array (
                'id' => 9,
                'image' => 'advs/January2020/1CfRsq9wgGNz6XFxA2wp.jpg',
                'order' => 1,
                'type' => 'medio_dere_top',
                'created_at' => '2020-01-29 02:50:48',
                'updated_at' => '2020-01-30 12:13:08',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'none'
            ),
            7 => 
            array (
                'id' => 8,
                'image' => 'advs/January2020/ZGlymMCNMrsPKELH7noS.jpg',
                'order' => 2,
                'type' => 'medio_dere_bajo',
                'created_at' => '2020-01-29 02:50:30',
                'updated_at' => '2020-01-30 12:13:15',
                'status' => 'A',
                'url' => '#',
                'text_position' => 'none'
            ),
        ));
        
        
    }
}