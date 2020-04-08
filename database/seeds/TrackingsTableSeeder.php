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
            9 => 
            array (
                'id' => 10,
                'description' => NULL,
                'orders_id' => 35,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'description' => NULL,
                'orders_id' => 36,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'description' => NULL,
                'orders_id' => 37,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'description' => NULL,
                'orders_id' => 38,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'description' => NULL,
                'orders_id' => 39,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'description' => NULL,
                'orders_id' => 40,
                'orders_status_id' => 5,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'description' => NULL,
                'orders_id' => 41,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'description' => NULL,
                'orders_id' => 42,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'description' => NULL,
                'orders_id' => 43,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'description' => NULL,
                'orders_id' => 44,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-05 09:57:00',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'description' => NULL,
                'orders_id' => 44,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 10:23:37',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'description' => NULL,
                'orders_id' => 43,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 10:24:27',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'description' => NULL,
                'orders_id' => 42,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 10:24:36',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'description' => NULL,
                'orders_id' => 45,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-05 11:06:37',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'description' => NULL,
                'orders_id' => 41,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 21:17:14',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'description' => NULL,
                'orders_id' => 41,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 21:17:14',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'description' => NULL,
                'orders_id' => 35,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 21:17:24',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'description' => NULL,
                'orders_id' => 14,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-05 21:17:31',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'description' => NULL,
                'orders_id' => 45,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 12:50:00',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'description' => NULL,
                'orders_id' => 46,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 12:50:26',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'description' => NULL,
                'orders_id' => 46,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 12:58:19',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'description' => NULL,
                'orders_id' => 47,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 12:59:28',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'description' => NULL,
                'orders_id' => 47,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:02:16',
                'updated_at' => '2020-04-06 13:02:16',
            ),
            32 => 
            array (
                'id' => 33,
                'description' => NULL,
                'orders_id' => 47,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:03:00',
                'updated_at' => '2020-04-06 13:03:00',
            ),
            33 => 
            array (
                'id' => 34,
                'description' => NULL,
                'orders_id' => 47,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:03:41',
                'updated_at' => '2020-04-06 13:03:41',
            ),
            34 => 
            array (
                'id' => 35,
                'description' => NULL,
                'orders_id' => 47,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:04:01',
                'updated_at' => '2020-04-06 13:04:01',
            ),
            35 => 
            array (
                'id' => 36,
                'description' => NULL,
                'orders_id' => 48,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:47:27',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'description' => NULL,
                'orders_id' => 49,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:56:24',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'description' => NULL,
                'orders_id' => 50,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 13:57:26',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'description' => NULL,
                'orders_id' => 51,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:03:39',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'description' => NULL,
                'orders_id' => 52,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:04:08',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'description' => NULL,
                'orders_id' => 53,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:04:24',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'description' => NULL,
                'orders_id' => 48,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:06:05',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'description' => NULL,
                'orders_id' => 49,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:25:27',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'description' => NULL,
                'orders_id' => 50,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:26:47',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'description' => NULL,
                'orders_id' => 51,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:38:20',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'description' => NULL,
                'orders_id' => 52,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:38:28',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'description' => NULL,
                'orders_id' => 53,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 14:48:48',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'description' => NULL,
                'orders_id' => 54,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 15:14:16',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'description' => NULL,
                'orders_id' => 55,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 15:24:25',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'description' => NULL,
                'orders_id' => 56,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 15:48:03',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'description' => NULL,
                'orders_id' => 57,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 16:06:49',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'description' => NULL,
                'orders_id' => 58,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 16:13:44',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'description' => NULL,
                'orders_id' => 59,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 16:17:41',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'description' => NULL,
                'orders_id' => 60,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 17:00:08',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'description' => NULL,
                'orders_id' => 61,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 17:04:14',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'description' => NULL,
                'orders_id' => 62,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 21:21:31',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'description' => NULL,
                'orders_id' => 63,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 21:59:51',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'description' => NULL,
                'orders_id' => 64,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:01:25',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'description' => NULL,
                'orders_id' => 67,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:16:58',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'description' => NULL,
                'orders_id' => 67,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:36:27',
                'updated_at' => '2020-04-06 22:36:27',
            ),
            60 => 
            array (
                'id' => 61,
                'description' => NULL,
                'orders_id' => 67,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:37:11',
                'updated_at' => '2020-04-06 22:37:11',
            ),
            61 => 
            array (
                'id' => 62,
                'description' => NULL,
                'orders_id' => 68,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:41:18',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'description' => NULL,
                'orders_id' => 68,
                'orders_status_id' => 2,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:41:56',
                'updated_at' => '2020-04-06 22:41:56',
            ),
            63 => 
            array (
                'id' => 64,
                'description' => NULL,
                'orders_id' => 64,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:26',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'description' => NULL,
                'orders_id' => 63,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:30',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'description' => NULL,
                'orders_id' => 62,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:32',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'description' => NULL,
                'orders_id' => 61,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:36',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'description' => NULL,
                'orders_id' => 54,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:44',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'description' => NULL,
                'orders_id' => 55,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:51',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'description' => NULL,
                'orders_id' => 57,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:56',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'description' => NULL,
                'orders_id' => 58,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:42:58',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'description' => NULL,
                'orders_id' => 59,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:43:01',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'description' => NULL,
                'orders_id' => 60,
                'orders_status_id' => 11,
                'users_id' => 16,
                'created_at' => '2020-04-06 22:43:03',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'description' => NULL,
                'orders_id' => 69,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-07 12:21:54',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'description' => NULL,
                'orders_id' => 70,
                'orders_status_id' => 1,
                'users_id' => 16,
                'created_at' => '2020-04-07 14:36:10',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}