<?php

use Illuminate\Database\Seeder;

class OrdersStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_status')->delete();
        
        \DB::table('orders_status')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nuevo',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:51:56',
                'updated_at' => '2020-02-24 18:51:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Preparando',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:12',
                'updated_at' => '2020-02-24 18:52:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'En despacho',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:23',
                'updated_at' => '2020-02-24 18:52:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Entregado',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:29',
                'updated_at' => '2020-02-24 18:52:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Devuelto',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:36',
                'updated_at' => '2020-02-24 18:52:36',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Retirar en tienda',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:45',
                'updated_at' => '2020-02-24 18:52:45',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Pago no procesado',
                'description' => NULL,
                'status' => 'A',
                'created_at' => '2020-02-24 18:52:53',
                'updated_at' => '2020-02-24 18:52:53',
            ),
        ));
        
        
    }
}