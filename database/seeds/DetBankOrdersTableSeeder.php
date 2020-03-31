<?php

use Illuminate\Database\Seeder;

class DetBankOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_bank_orders')->delete();
        
        \DB::table('det_bank_orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'amount' => '200.000000',
                'orders_id' => 13,
                'bank_datas_id' => 1,
                'status' => 'aprobado',
                'created_at' => '2020-03-26 14:55:36',
                'updated_at' => '2020-03-26 14:55:36',
            ),
            1 => 
            array (
                'id' => 4,
                'amount' => '200.000000',
                'orders_id' => 15,
                'bank_datas_id' => 2,
                'status' => 'rechazado',
                'created_at' => '2020-03-26 14:57:00',
                'updated_at' => '2020-03-26 14:57:00',
            ),
            2 => 
            array (
                'id' => 5,
                'amount' => '2000000.000000',
                'orders_id' => 11,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'created_at' => '2020-03-26 14:57:27',
                'updated_at' => '2020-03-26 14:57:27',
            ),
            3 => 
            array (
                'id' => 2,
                'amount' => '200.000000',
                'orders_id' => 14,
                'bank_datas_id' => 3,
                'status' => 'aprobado',
                'created_at' => '2020-03-26 14:56:24',
                'updated_at' => '2020-03-26 15:11:33',
            ),
        ));
        
        
    }
}