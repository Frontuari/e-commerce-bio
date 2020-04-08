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
            4 => 
            array (
                'id' => 6,
                'amount' => '1000000.000000',
                'orders_id' => 45,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-05 18:35:20',
                'updated_at' => '2020-04-05 18:35:20',
            ),
            5 => 
            array (
                'id' => 7,
                'amount' => '1000000.000000',
                'orders_id' => 45,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-05 18:35:57',
                'updated_at' => '2020-04-05 18:35:57',
            ),
            6 => 
            array (
                'id' => 8,
                'amount' => '1500000.000000',
                'orders_id' => 45,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 09:37:51',
                'updated_at' => '2020-04-06 09:37:51',
            ),
            7 => 
            array (
                'id' => 9,
                'amount' => '1000000.000000',
                'orders_id' => 46,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 12:52:50',
                'updated_at' => '2020-04-06 12:52:50',
            ),
            8 => 
            array (
                'id' => 10,
                'amount' => '749000.000000',
                'orders_id' => 46,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 12:53:10',
                'updated_at' => '2020-04-06 12:53:10',
            ),
            9 => 
            array (
                'id' => 11,
                'amount' => '1000.000000',
                'orders_id' => 46,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 12:53:27',
                'updated_at' => '2020-04-06 12:53:27',
            ),
            10 => 
            array (
                'id' => 12,
                'amount' => '400000.000000',
                'orders_id' => 47,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 13:02:16',
                'updated_at' => '2020-04-06 13:02:16',
            ),
            11 => 
            array (
                'id' => 13,
                'amount' => '450000.000000',
                'orders_id' => 47,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 13:03:00',
                'updated_at' => '2020-04-06 13:03:00',
            ),
            12 => 
            array (
                'id' => 14,
                'amount' => '400.000000',
                'orders_id' => 47,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 13:03:41',
                'updated_at' => '2020-04-06 13:03:41',
            ),
            13 => 
            array (
                'id' => 15,
                'amount' => '4000.000000',
                'orders_id' => 47,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 13:04:01',
                'updated_at' => '2020-04-06 13:04:01',
            ),
            14 => 
            array (
                'id' => 16,
                'amount' => '60.000000',
                'orders_id' => 67,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:18:15',
                'updated_at' => '2020-04-06 22:18:15',
            ),
            15 => 
            array (
                'id' => 17,
                'amount' => '1000000.000000',
                'orders_id' => 67,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:29:49',
                'updated_at' => '2020-04-06 22:29:49',
            ),
            16 => 
            array (
                'id' => 18,
                'amount' => '810000.000000',
                'orders_id' => 67,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:31:53',
                'updated_at' => '2020-04-06 22:31:53',
            ),
            17 => 
            array (
                'id' => 19,
                'amount' => '1000000.000000',
                'orders_id' => 67,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:32:10',
                'updated_at' => '2020-04-06 22:32:10',
            ),
            18 => 
            array (
                'id' => 20,
                'amount' => '1380240.000000',
                'orders_id' => 67,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:36:27',
                'updated_at' => '2020-04-06 22:36:27',
            ),
            19 => 
            array (
                'id' => 21,
                'amount' => '891000.000000',
                'orders_id' => 67,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:37:11',
                'updated_at' => '2020-04-06 22:37:11',
            ),
            20 => 
            array (
                'id' => 22,
                'amount' => '81000.000000',
                'orders_id' => 68,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:41:35',
                'updated_at' => '2020-04-06 22:41:35',
            ),
            21 => 
            array (
                'id' => 23,
                'amount' => '151000.000000',
                'orders_id' => 68,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'created_at' => '2020-04-06 22:41:56',
                'updated_at' => '2020-04-06 22:41:56',
            ),
        ));
        
        
    }
}