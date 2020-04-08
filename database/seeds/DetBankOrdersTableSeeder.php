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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
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
                'ref' => NULL,
                'created_at' => '2020-04-06 22:41:56',
                'updated_at' => '2020-04-06 22:41:56',
            ),
            22 => 
            array (
                'id' => 3,
                'amount' => '5000000.000000',
                'orders_id' => 70,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'hjkghjk',
                'created_at' => '2020-04-07 15:50:34',
                'updated_at' => '2020-04-07 15:50:34',
            ),
            23 => 
            array (
                'id' => 24,
                'amount' => '334000.000000',
                'orders_id' => 72,
                'bank_datas_id' => 6,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:01:53',
                'updated_at' => '2020-04-08 12:01:53',
            ),
            24 => 
            array (
                'id' => 25,
                'amount' => '1000000.000000',
                'orders_id' => 72,
                'bank_datas_id' => 6,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:02:28',
                'updated_at' => '2020-04-08 12:02:28',
            ),
            25 => 
            array (
                'id' => 26,
                'amount' => '810000.000000',
                'orders_id' => 73,
                'bank_datas_id' => 5,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:05:30',
                'updated_at' => '2020-04-08 12:05:30',
            ),
            26 => 
            array (
                'id' => 30,
                'amount' => '810000.000000',
                'orders_id' => 74,
                'bank_datas_id' => 5,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:17:00',
                'updated_at' => '2020-04-08 12:17:00',
            ),
            27 => 
            array (
                'id' => 31,
                'amount' => '3159000.000000',
                'orders_id' => 74,
                'bank_datas_id' => 5,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:17:14',
                'updated_at' => '2020-04-08 12:17:14',
            ),
            28 => 
            array (
                'id' => 32,
                'amount' => '810000.000000',
                'orders_id' => 75,
                'bank_datas_id' => 5,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:22:28',
                'updated_at' => '2020-04-08 12:22:28',
            ),
            29 => 
            array (
                'id' => 33,
                'amount' => '810000.000000',
                'orders_id' => 75,
                'bank_datas_id' => 5,
                'status' => 'nuevo',
                'ref' => 'null',
                'created_at' => '2020-04-08 12:22:58',
                'updated_at' => '2020-04-08 12:22:58',
            ),
            30 => 
            array (
                'id' => 34,
                'amount' => '10.000000',
                'orders_id' => 76,
                'bank_datas_id' => 7,
                'status' => 'nuevo',
                'ref' => 'hjk',
                'created_at' => '2020-04-08 12:36:29',
                'updated_at' => '2020-04-08 12:36:29',
            ),
            31 => 
            array (
                'id' => 35,
                'amount' => '4441800.000000',
                'orders_id' => 76,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'ref' => 'kjlñjkl',
                'created_at' => '2020-04-08 12:42:28',
                'updated_at' => '2020-04-08 12:42:28',
            ),
            32 => 
            array (
                'id' => 36,
                'amount' => '1100000.000000',
                'orders_id' => 77,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'ref' => 'fgjhg',
                'created_at' => '2020-04-08 12:43:06',
                'updated_at' => '2020-04-08 12:43:06',
            ),
            33 => 
            array (
                'id' => 37,
                'amount' => '100000.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'klhjkl',
                'created_at' => '2020-04-08 12:44:04',
                'updated_at' => '2020-04-08 12:44:04',
            ),
            34 => 
            array (
                'id' => 38,
                'amount' => '100.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'hjkghk',
                'created_at' => '2020-04-08 12:44:16',
                'updated_at' => '2020-04-08 12:44:16',
            ),
            35 => 
            array (
                'id' => 39,
                'amount' => '233.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'sfd',
                'created_at' => '2020-04-08 12:58:34',
                'updated_at' => '2020-04-08 12:58:34',
            ),
            36 => 
            array (
                'id' => 40,
                'amount' => '1000.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'fgjhfg',
                'created_at' => '2020-04-08 13:20:57',
                'updated_at' => '2020-04-08 13:20:57',
            ),
            37 => 
            array (
                'id' => 41,
                'amount' => '2.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'tyutyu',
                'created_at' => '2020-04-08 13:23:14',
                'updated_at' => '2020-04-08 13:23:14',
            ),
            38 => 
            array (
                'id' => 42,
                'amount' => '20.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'asdf',
                'created_at' => '2020-04-08 13:24:32',
                'updated_at' => '2020-04-08 13:24:32',
            ),
            39 => 
            array (
                'id' => 43,
                'amount' => '500.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => '2000',
                'created_at' => '2020-04-08 13:30:16',
                'updated_at' => '2020-04-08 13:30:16',
            ),
            40 => 
            array (
                'id' => 44,
                'amount' => '20.890000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'dfgh',
                'created_at' => '2020-04-08 13:34:15',
                'updated_at' => '2020-04-08 13:34:15',
            ),
            41 => 
            array (
                'id' => 45,
                'amount' => '200.000000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'sdfg',
                'created_at' => '2020-04-08 13:34:24',
                'updated_at' => '2020-04-08 13:34:24',
            ),
            42 => 
            array (
                'id' => 46,
                'amount' => '477924.010000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'shgsdfg',
                'created_at' => '2020-04-08 13:34:52',
                'updated_at' => '2020-04-08 13:34:52',
            ),
            43 => 
            array (
                'id' => 47,
                'amount' => '0.100000',
                'orders_id' => 78,
                'bank_datas_id' => 3,
                'status' => 'nuevo',
                'ref' => 'sdfg',
                'created_at' => '2020-04-08 13:35:03',
                'updated_at' => '2020-04-08 13:35:03',
            ),
            44 => 
            array (
                'id' => 48,
                'amount' => '572000.000000',
                'orders_id' => 79,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'ref' => 'rdtyr',
                'created_at' => '2020-04-08 13:35:51',
                'updated_at' => '2020-04-08 13:35:51',
            ),
            45 => 
            array (
                'id' => 49,
                'amount' => '7700.000000',
                'orders_id' => 79,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'ref' => 'fghf',
                'created_at' => '2020-04-08 13:40:23',
                'updated_at' => '2020-04-08 13:40:23',
            ),
            46 => 
            array (
                'id' => 50,
                'amount' => '110000.000000',
                'orders_id' => 79,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'ref' => 'fghjfghj',
                'created_at' => '2020-04-08 13:40:41',
                'updated_at' => '2020-04-08 13:40:41',
            ),
            47 => 
            array (
                'id' => 51,
                'amount' => '1160500.004000',
                'orders_id' => 80,
                'bank_datas_id' => 2,
                'status' => 'nuevo',
                'ref' => 'sdf',
                'created_at' => '2020-04-08 13:42:29',
                'updated_at' => '2020-04-08 13:42:29',
            ),
        ));
        
        
    }
}