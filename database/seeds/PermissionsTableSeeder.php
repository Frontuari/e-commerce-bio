<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-14 15:08:46',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_cities',
                'table_name' => 'cities',
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-01-23 21:21:05',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_cities',
                'table_name' => 'cities',
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-01-23 21:21:05',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_cities',
                'table_name' => 'cities',
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-01-23 21:21:05',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_cities',
                'table_name' => 'cities',
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-01-23 21:21:05',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_cities',
                'table_name' => 'cities',
                'created_at' => '2020-01-23 21:21:05',
                'updated_at' => '2020-01-23 21:21:05',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_regions',
                'table_name' => 'regions',
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-01-23 21:33:52',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_regions',
                'table_name' => 'regions',
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-01-23 21:33:52',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_regions',
                'table_name' => 'regions',
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-01-23 21:33:52',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_regions',
                'table_name' => 'regions',
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-01-23 21:33:52',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_regions',
                'table_name' => 'regions',
                'created_at' => '2020-01-23 21:33:52',
                'updated_at' => '2020-01-23 21:33:52',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_states',
                'table_name' => 'states',
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-01-23 21:36:08',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_states',
                'table_name' => 'states',
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-01-23 21:36:08',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_states',
                'table_name' => 'states',
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-01-23 21:36:08',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_states',
                'table_name' => 'states',
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-01-23 21:36:08',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_states',
                'table_name' => 'states',
                'created_at' => '2020-01-23 21:36:08',
                'updated_at' => '2020-01-23 21:36:08',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-01-23 22:18:13',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-01-23 22:18:13',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-01-23 22:18:13',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-01-23 22:18:13',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-23 22:18:13',
                'updated_at' => '2020-01-23 22:18:13',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-23 22:26:37',
            ),
            51 => 
            array (
                'id' => 57,
                'key' => 'browse_peoples',
                'table_name' => 'peoples',
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-01-24 13:31:04',
            ),
            52 => 
            array (
                'id' => 58,
                'key' => 'read_peoples',
                'table_name' => 'peoples',
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-01-24 13:31:04',
            ),
            53 => 
            array (
                'id' => 59,
                'key' => 'edit_peoples',
                'table_name' => 'peoples',
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-01-24 13:31:04',
            ),
            54 => 
            array (
                'id' => 60,
                'key' => 'add_peoples',
                'table_name' => 'peoples',
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-01-24 13:31:04',
            ),
            55 => 
            array (
                'id' => 61,
                'key' => 'delete_peoples',
                'table_name' => 'peoples',
                'created_at' => '2020-01-24 13:31:04',
                'updated_at' => '2020-01-24 13:31:04',
            ),
            56 => 
            array (
                'id' => 62,
                'key' => 'browse_coins',
                'table_name' => 'coins',
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-01-24 14:26:46',
            ),
            57 => 
            array (
                'id' => 63,
                'key' => 'read_coins',
                'table_name' => 'coins',
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-01-24 14:26:46',
            ),
            58 => 
            array (
                'id' => 64,
                'key' => 'edit_coins',
                'table_name' => 'coins',
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-01-24 14:26:46',
            ),
            59 => 
            array (
                'id' => 65,
                'key' => 'add_coins',
                'table_name' => 'coins',
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-01-24 14:26:46',
            ),
            60 => 
            array (
                'id' => 66,
                'key' => 'delete_coins',
                'table_name' => 'coins',
                'created_at' => '2020-01-24 14:26:46',
                'updated_at' => '2020-01-24 14:26:46',
            ),
            61 => 
            array (
                'id' => 67,
                'key' => 'browse_stores',
                'table_name' => 'stores',
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-01-24 14:31:55',
            ),
            62 => 
            array (
                'id' => 68,
                'key' => 'read_stores',
                'table_name' => 'stores',
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-01-24 14:31:55',
            ),
            63 => 
            array (
                'id' => 69,
                'key' => 'edit_stores',
                'table_name' => 'stores',
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-01-24 14:31:55',
            ),
            64 => 
            array (
                'id' => 70,
                'key' => 'add_stores',
                'table_name' => 'stores',
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-01-24 14:31:55',
            ),
            65 => 
            array (
                'id' => 71,
                'key' => 'delete_stores',
                'table_name' => 'stores',
                'created_at' => '2020-01-24 14:31:55',
                'updated_at' => '2020-01-24 14:31:55',
            ),
            66 => 
            array (
                'id' => 72,
                'key' => 'browse_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-24 14:41:06',
            ),
            67 => 
            array (
                'id' => 73,
                'key' => 'read_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-24 14:41:06',
            ),
            68 => 
            array (
                'id' => 74,
                'key' => 'edit_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-24 14:41:06',
            ),
            69 => 
            array (
                'id' => 75,
                'key' => 'add_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-24 14:41:06',
            ),
            70 => 
            array (
                'id' => 76,
                'key' => 'delete_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2020-01-24 14:41:06',
                'updated_at' => '2020-01-24 14:41:06',
            ),
            71 => 
            array (
                'id' => 77,
                'key' => 'browse_brands',
                'table_name' => 'brands',
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-01-24 14:44:40',
            ),
            72 => 
            array (
                'id' => 78,
                'key' => 'read_brands',
                'table_name' => 'brands',
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-01-24 14:44:40',
            ),
            73 => 
            array (
                'id' => 79,
                'key' => 'edit_brands',
                'table_name' => 'brands',
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-01-24 14:44:40',
            ),
            74 => 
            array (
                'id' => 80,
                'key' => 'add_brands',
                'table_name' => 'brands',
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-01-24 14:44:40',
            ),
            75 => 
            array (
                'id' => 81,
                'key' => 'delete_brands',
                'table_name' => 'brands',
                'created_at' => '2020-01-24 14:44:40',
                'updated_at' => '2020-01-24 14:44:40',
            ),
            76 => 
            array (
                'id' => 82,
                'key' => 'browse_transports',
                'table_name' => 'transports',
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-01-24 14:47:07',
            ),
            77 => 
            array (
                'id' => 83,
                'key' => 'read_transports',
                'table_name' => 'transports',
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-01-24 14:47:07',
            ),
            78 => 
            array (
                'id' => 84,
                'key' => 'edit_transports',
                'table_name' => 'transports',
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-01-24 14:47:07',
            ),
            79 => 
            array (
                'id' => 85,
                'key' => 'add_transports',
                'table_name' => 'transports',
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-01-24 14:47:07',
            ),
            80 => 
            array (
                'id' => 86,
                'key' => 'delete_transports',
                'table_name' => 'transports',
                'created_at' => '2020-01-24 14:47:07',
                'updated_at' => '2020-01-24 14:47:07',
            ),
            81 => 
            array (
                'id' => 87,
                'key' => 'browse_packagings',
                'table_name' => 'packagings',
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-01-24 14:49:33',
            ),
            82 => 
            array (
                'id' => 88,
                'key' => 'read_packagings',
                'table_name' => 'packagings',
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-01-24 14:49:33',
            ),
            83 => 
            array (
                'id' => 89,
                'key' => 'edit_packagings',
                'table_name' => 'packagings',
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-01-24 14:49:33',
            ),
            84 => 
            array (
                'id' => 90,
                'key' => 'add_packagings',
                'table_name' => 'packagings',
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-01-24 14:49:33',
            ),
            85 => 
            array (
                'id' => 91,
                'key' => 'delete_packagings',
                'table_name' => 'packagings',
                'created_at' => '2020-01-24 14:49:33',
                'updated_at' => '2020-01-24 14:49:33',
            ),
            86 => 
            array (
                'id' => 92,
                'key' => 'browse_banks',
                'table_name' => 'banks',
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-01-24 14:50:21',
            ),
            87 => 
            array (
                'id' => 93,
                'key' => 'read_banks',
                'table_name' => 'banks',
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-01-24 14:50:21',
            ),
            88 => 
            array (
                'id' => 94,
                'key' => 'edit_banks',
                'table_name' => 'banks',
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-01-24 14:50:21',
            ),
            89 => 
            array (
                'id' => 95,
                'key' => 'add_banks',
                'table_name' => 'banks',
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-01-24 14:50:21',
            ),
            90 => 
            array (
                'id' => 96,
                'key' => 'delete_banks',
                'table_name' => 'banks',
                'created_at' => '2020-01-24 14:50:21',
                'updated_at' => '2020-01-24 14:50:21',
            ),
            91 => 
            array (
                'id' => 97,
                'key' => 'browse_rating_products',
                'table_name' => 'rating_products',
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-24 14:52:36',
            ),
            92 => 
            array (
                'id' => 98,
                'key' => 'read_rating_products',
                'table_name' => 'rating_products',
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-24 14:52:36',
            ),
            93 => 
            array (
                'id' => 99,
                'key' => 'edit_rating_products',
                'table_name' => 'rating_products',
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-24 14:52:36',
            ),
            94 => 
            array (
                'id' => 100,
                'key' => 'add_rating_products',
                'table_name' => 'rating_products',
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-24 14:52:36',
            ),
            95 => 
            array (
                'id' => 101,
                'key' => 'delete_rating_products',
                'table_name' => 'rating_products',
                'created_at' => '2020-01-24 14:52:36',
                'updated_at' => '2020-01-24 14:52:36',
            ),
            96 => 
            array (
                'id' => 102,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-01-24 15:05:08',
            ),
            97 => 
            array (
                'id' => 103,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-01-24 15:05:08',
            ),
            98 => 
            array (
                'id' => 104,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-01-24 15:05:08',
            ),
            99 => 
            array (
                'id' => 105,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-01-24 15:05:08',
            ),
            100 => 
            array (
                'id' => 106,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-01-24 15:05:08',
                'updated_at' => '2020-01-24 15:05:08',
            ),
            101 => 
            array (
                'id' => 107,
                'key' => 'browse_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-01-24 16:20:09',
            ),
            102 => 
            array (
                'id' => 108,
                'key' => 'read_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-01-24 16:20:09',
            ),
            103 => 
            array (
                'id' => 109,
                'key' => 'edit_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-01-24 16:20:09',
            ),
            104 => 
            array (
                'id' => 110,
                'key' => 'add_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-01-24 16:20:09',
            ),
            105 => 
            array (
                'id' => 111,
                'key' => 'delete_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2020-01-24 16:20:09',
                'updated_at' => '2020-01-24 16:20:09',
            ),
            106 => 
            array (
                'id' => 117,
                'key' => 'browse_bank_datas',
                'table_name' => 'bank_datas',
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-24 20:10:34',
            ),
            107 => 
            array (
                'id' => 118,
                'key' => 'read_bank_datas',
                'table_name' => 'bank_datas',
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-24 20:10:34',
            ),
            108 => 
            array (
                'id' => 119,
                'key' => 'edit_bank_datas',
                'table_name' => 'bank_datas',
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-24 20:10:34',
            ),
            109 => 
            array (
                'id' => 120,
                'key' => 'add_bank_datas',
                'table_name' => 'bank_datas',
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-24 20:10:34',
            ),
            110 => 
            array (
                'id' => 121,
                'key' => 'delete_bank_datas',
                'table_name' => 'bank_datas',
                'created_at' => '2020-01-24 20:10:34',
                'updated_at' => '2020-01-24 20:10:34',
            ),
            111 => 
            array (
                'id' => 122,
                'key' => 'browse_taxes',
                'table_name' => 'taxes',
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-24 21:07:40',
            ),
            112 => 
            array (
                'id' => 123,
                'key' => 'read_taxes',
                'table_name' => 'taxes',
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-24 21:07:40',
            ),
            113 => 
            array (
                'id' => 124,
                'key' => 'edit_taxes',
                'table_name' => 'taxes',
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-24 21:07:40',
            ),
            114 => 
            array (
                'id' => 125,
                'key' => 'add_taxes',
                'table_name' => 'taxes',
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-24 21:07:40',
            ),
            115 => 
            array (
                'id' => 126,
                'key' => 'delete_taxes',
                'table_name' => 'taxes',
                'created_at' => '2020-01-24 21:07:40',
                'updated_at' => '2020-01-24 21:07:40',
            ),
            116 => 
            array (
                'id' => 127,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-24 21:22:54',
            ),
            117 => 
            array (
                'id' => 128,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-24 21:22:54',
            ),
            118 => 
            array (
                'id' => 129,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-24 21:22:54',
            ),
            119 => 
            array (
                'id' => 130,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-24 21:22:54',
            ),
            120 => 
            array (
                'id' => 131,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-01-24 21:22:54',
                'updated_at' => '2020-01-24 21:22:54',
            ),
            121 => 
            array (
                'id' => 137,
                'key' => 'browse_advs',
                'table_name' => 'advs',
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-01-29 02:11:23',
            ),
            122 => 
            array (
                'id' => 138,
                'key' => 'read_advs',
                'table_name' => 'advs',
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-01-29 02:11:23',
            ),
            123 => 
            array (
                'id' => 139,
                'key' => 'edit_advs',
                'table_name' => 'advs',
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-01-29 02:11:23',
            ),
            124 => 
            array (
                'id' => 140,
                'key' => 'add_advs',
                'table_name' => 'advs',
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-01-29 02:11:23',
            ),
            125 => 
            array (
                'id' => 141,
                'key' => 'delete_advs',
                'table_name' => 'advs',
                'created_at' => '2020-01-29 02:11:23',
                'updated_at' => '2020-01-29 02:11:23',
            ),
            126 => 
            array (
                'id' => 142,
                'key' => 'browse_packages',
                'table_name' => 'packages',
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-01-30 12:27:46',
            ),
            127 => 
            array (
                'id' => 143,
                'key' => 'read_packages',
                'table_name' => 'packages',
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-01-30 12:27:46',
            ),
            128 => 
            array (
                'id' => 144,
                'key' => 'edit_packages',
                'table_name' => 'packages',
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-01-30 12:27:46',
            ),
            129 => 
            array (
                'id' => 145,
                'key' => 'add_packages',
                'table_name' => 'packages',
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-01-30 12:27:46',
            ),
            130 => 
            array (
                'id' => 146,
                'key' => 'delete_packages',
                'table_name' => 'packages',
                'created_at' => '2020-01-30 12:27:46',
                'updated_at' => '2020-01-30 12:27:46',
            ),
            131 => 
            array (
                'id' => 147,
                'key' => 'browse_order_address',
                'table_name' => 'order_address',
                'created_at' => '2020-02-23 21:17:16',
                'updated_at' => '2020-02-23 21:17:16',
            ),
            132 => 
            array (
                'id' => 148,
                'key' => 'read_order_address',
                'table_name' => 'order_address',
                'created_at' => '2020-02-23 21:17:16',
                'updated_at' => '2020-02-23 21:17:16',
            ),
            133 => 
            array (
                'id' => 149,
                'key' => 'edit_order_address',
                'table_name' => 'order_address',
                'created_at' => '2020-02-23 21:17:16',
                'updated_at' => '2020-02-23 21:17:16',
            ),
            134 => 
            array (
                'id' => 150,
                'key' => 'add_order_address',
                'table_name' => 'order_address',
                'created_at' => '2020-02-23 21:17:16',
                'updated_at' => '2020-02-23 21:17:16',
            ),
            135 => 
            array (
                'id' => 151,
                'key' => 'delete_order_address',
                'table_name' => 'order_address',
                'created_at' => '2020-02-23 21:17:16',
                'updated_at' => '2020-02-23 21:17:16',
            ),
            136 => 
            array (
                'id' => 152,
                'key' => 'browse_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-24 14:38:45',
                'updated_at' => '2020-02-24 14:38:45',
            ),
            137 => 
            array (
                'id' => 153,
                'key' => 'read_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-24 14:38:45',
                'updated_at' => '2020-02-24 14:38:45',
            ),
            138 => 
            array (
                'id' => 154,
                'key' => 'edit_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-24 14:38:45',
                'updated_at' => '2020-02-24 14:38:45',
            ),
            139 => 
            array (
                'id' => 155,
                'key' => 'add_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-24 14:38:45',
                'updated_at' => '2020-02-24 14:38:45',
            ),
            140 => 
            array (
                'id' => 156,
                'key' => 'delete_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-24 14:38:45',
                'updated_at' => '2020-02-24 14:38:45',
            ),
            141 => 
            array (
                'id' => 177,
                'key' => 'browse_orders_status',
                'table_name' => 'orders_status',
                'created_at' => '2020-02-24 18:28:11',
                'updated_at' => '2020-02-24 18:28:11',
            ),
            142 => 
            array (
                'id' => 178,
                'key' => 'read_orders_status',
                'table_name' => 'orders_status',
                'created_at' => '2020-02-24 18:28:11',
                'updated_at' => '2020-02-24 18:28:11',
            ),
            143 => 
            array (
                'id' => 179,
                'key' => 'edit_orders_status',
                'table_name' => 'orders_status',
                'created_at' => '2020-02-24 18:28:11',
                'updated_at' => '2020-02-24 18:28:11',
            ),
            144 => 
            array (
                'id' => 180,
                'key' => 'add_orders_status',
                'table_name' => 'orders_status',
                'created_at' => '2020-02-24 18:28:11',
                'updated_at' => '2020-02-24 18:28:11',
            ),
            145 => 
            array (
                'id' => 181,
                'key' => 'delete_orders_status',
                'table_name' => 'orders_status',
                'created_at' => '2020-02-24 18:28:11',
                'updated_at' => '2020-02-24 18:28:11',
            ),
            146 => 
            array (
                'id' => 182,
                'key' => 'browse_trackings',
                'table_name' => 'trackings',
                'created_at' => '2020-02-24 19:02:15',
                'updated_at' => '2020-02-24 19:02:15',
            ),
            147 => 
            array (
                'id' => 183,
                'key' => 'read_trackings',
                'table_name' => 'trackings',
                'created_at' => '2020-02-24 19:02:15',
                'updated_at' => '2020-02-24 19:02:15',
            ),
            148 => 
            array (
                'id' => 184,
                'key' => 'edit_trackings',
                'table_name' => 'trackings',
                'created_at' => '2020-02-24 19:02:15',
                'updated_at' => '2020-02-24 19:02:15',
            ),
            149 => 
            array (
                'id' => 185,
                'key' => 'add_trackings',
                'table_name' => 'trackings',
                'created_at' => '2020-02-24 19:02:15',
                'updated_at' => '2020-02-24 19:02:15',
            ),
            150 => 
            array (
                'id' => 186,
                'key' => 'delete_trackings',
                'table_name' => 'trackings',
                'created_at' => '2020-02-24 19:02:15',
                'updated_at' => '2020-02-24 19:02:15',
            ),
            151 => 
            array (
                'id' => 187,
                'key' => 'browse_det_bank_orders',
                'table_name' => 'det_bank_orders',
                'created_at' => '2020-03-26 01:01:30',
                'updated_at' => '2020-03-26 01:01:30',
            ),
            152 => 
            array (
                'id' => 188,
                'key' => 'read_det_bank_orders',
                'table_name' => 'det_bank_orders',
                'created_at' => '2020-03-26 01:01:30',
                'updated_at' => '2020-03-26 01:01:30',
            ),
            153 => 
            array (
                'id' => 189,
                'key' => 'edit_det_bank_orders',
                'table_name' => 'det_bank_orders',
                'created_at' => '2020-03-26 01:01:30',
                'updated_at' => '2020-03-26 01:01:30',
            ),
            154 => 
            array (
                'id' => 190,
                'key' => 'add_det_bank_orders',
                'table_name' => 'det_bank_orders',
                'created_at' => '2020-03-26 01:01:30',
                'updated_at' => '2020-03-26 01:01:30',
            ),
            155 => 
            array (
                'id' => 191,
                'key' => 'delete_det_bank_orders',
                'table_name' => 'det_bank_orders',
                'created_at' => '2020-03-26 01:01:30',
                'updated_at' => '2020-03-26 01:01:30',
            ),
            156 => 
            array (
                'id' => 192,
                'key' => 'browse_calendars',
                'table_name' => 'calendars',
                'created_at' => '2020-03-31 14:41:13',
                'updated_at' => '2020-03-31 14:41:13',
            ),
            157 => 
            array (
                'id' => 193,
                'key' => 'read_calendars',
                'table_name' => 'calendars',
                'created_at' => '2020-03-31 14:41:13',
                'updated_at' => '2020-03-31 14:41:13',
            ),
            158 => 
            array (
                'id' => 194,
                'key' => 'edit_calendars',
                'table_name' => 'calendars',
                'created_at' => '2020-03-31 14:41:13',
                'updated_at' => '2020-03-31 14:41:13',
            ),
            159 => 
            array (
                'id' => 195,
                'key' => 'add_calendars',
                'table_name' => 'calendars',
                'created_at' => '2020-03-31 14:41:13',
                'updated_at' => '2020-03-31 14:41:13',
            ),
            160 => 
            array (
                'id' => 196,
                'key' => 'delete_calendars',
                'table_name' => 'calendars',
                'created_at' => '2020-03-31 14:41:13',
                'updated_at' => '2020-03-31 14:41:13',
            ),
            161 => 
            array (
                'id' => 197,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-15 20:17:48',
                'updated_at' => '2020-04-15 20:17:48',
            ),
            162 => 
            array (
                'id' => 198,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-15 20:17:48',
                'updated_at' => '2020-04-15 20:17:48',
            ),
            163 => 
            array (
                'id' => 199,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-15 20:17:48',
                'updated_at' => '2020-04-15 20:17:48',
            ),
            164 => 
            array (
                'id' => 200,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-15 20:17:48',
                'updated_at' => '2020-04-15 20:17:48',
            ),
            165 => 
            array (
                'id' => 201,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-04-15 20:17:48',
                'updated_at' => '2020-04-15 20:17:48',
            ),
        ));
        
        
    }
}