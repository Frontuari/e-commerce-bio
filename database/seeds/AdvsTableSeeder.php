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
                'id' => 5,
                'image' => 'advs/January2020/oRfdDcKgHEWKvvJwNzN8.jpg',
                'order' => 'izq',
                'type' => 'footer',
                'created_at' => '2020-01-29 02:46:34',
                'updated_at' => '2020-02-19 00:29:00',
                'status' => 'A',
                'url' => '#',
                'categories_id' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'image' => 'advs/January2020/ivW4tVFlhXF8nGUFekx2.jpg',
                'order' => 'der',
                'type' => 'medio_bajo',
                'created_at' => '2020-01-29 02:45:53',
                'updated_at' => '2020-02-19 00:29:05',
                'status' => 'A',
                'url' => '#',
                'categories_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'advs/January2020/MBmgwKzNo8Ag5vmebKLC.jpg',
                'order' => 'der',
                'type' => 'top',
                'created_at' => '2020-01-29 02:19:34',
                'updated_at' => '2020-02-19 00:29:18',
                'status' => 'A',
                'url' => '#',
                'categories_id' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'image' => 'advs/January2020/DweWSS88re7gSUiKmVv8.jpg',
                'order' => 'izq',
                'type' => 'top',
                'created_at' => '2020-01-29 02:19:24',
                'updated_at' => '2020-02-19 00:29:23',
                'status' => 'A',
                'url' => '#',
                'categories_id' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'image' => 'advs/January2020/nyF40Cml77b5L457hSCy.jpg',
                'order' => NULL,
                'type' => 'medio',
                'created_at' => '2020-01-29 02:49:26',
                'updated_at' => '2020-02-19 15:29:01',
                'status' => 'A',
                'url' => 'http://127.0.0.1:8000/catalog?cat=3',
                'categories_id' => 3,
            ),
            5 => 
            array (
                'id' => 7,
                'image' => 'advs/January2020/NNuOrV3ooLFmR9gDTtJY.jpg',
                'order' => NULL,
                'type' => 'medio',
                'created_at' => '2020-01-29 02:49:56',
                'updated_at' => '2020-02-19 15:29:16',
                'status' => 'A',
                'url' => 'http://127.0.0.1:8000/catalog?cat=8',
                'categories_id' => 8,
            ),
            6 => 
            array (
                'id' => 8,
                'image' => 'advs/January2020/ZGlymMCNMrsPKELH7noS.jpg',
                'order' => NULL,
                'type' => 'medio_dere_bajo',
                'created_at' => '2020-01-29 02:50:30',
                'updated_at' => '2020-02-19 15:29:49',
                'status' => 'A',
                'url' => 'http://127.0.0.1:8000/catalog?cat=10',
                'categories_id' => 10,
            ),
            7 => 
            array (
                'id' => 9,
                'image' => 'advs/January2020/1CfRsq9wgGNz6XFxA2wp.jpg',
                'order' => 'izq',
                'type' => 'medio_dere_top',
                'created_at' => '2020-01-29 02:50:48',
                'updated_at' => '2020-02-19 15:30:05',
                'status' => 'A',
                'url' => 'http://127.0.0.1:8000/catalog?cat=11',
                'categories_id' => 11,
            ),
        ));
        
        
    }
}