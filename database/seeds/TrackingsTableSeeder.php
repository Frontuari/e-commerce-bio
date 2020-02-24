<?php

use Illuminate\Database\Seeder;

class TrackingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trackings')->delete();
        
        \DB::table('trackings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => NULL,
                'orders_id' => 11,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:24:26',
                'updated_at' => '2020-02-24 19:24:26',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => NULL,
                'orders_id' => 13,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:24:00',
                'updated_at' => '2020-02-24 19:25:10',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:24:00',
                'updated_at' => '2020-02-24 19:25:15',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => NULL,
                'orders_id' => 11,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:26:51',
                'updated_at' => '2020-02-24 19:26:51',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => NULL,
                'orders_id' => 11,
                'orders_status_id' => 3,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:27:05',
                'updated_at' => '2020-02-24 19:27:05',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => NULL,
                'orders_id' => 11,
                'orders_status_id' => 4,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:27:21',
                'updated_at' => '2020-02-24 19:27:21',
            ),
            6 => 
            array (
                'id' => 7,
                'description' => NULL,
                'orders_id' => 13,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:27:30',
                'updated_at' => '2020-02-24 19:27:30',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => NULL,
                'orders_id' => 13,
                'orders_status_id' => 3,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:27:39',
                'updated_at' => '2020-02-24 19:27:39',
            ),
            8 => 
            array (
                'id' => 9,
                'description' => 'El cliente no se encontro, por favor reitrar en tienda',
                'orders_id' => 13,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => '2020-02-24 19:28:05',
                'updated_at' => '2020-02-24 19:28:05',
            ),
        ));
        
        
    }
}