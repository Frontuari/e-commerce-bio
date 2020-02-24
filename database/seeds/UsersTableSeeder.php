<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'last_ip' => NULL,
                'last_activity' => '2020-01-14 11:06:26',
                'password' => '$2y$10$u6U8DlKStCj5DnsMn2uB2e8eHcpA9naiARZWjM4TbzOK41c3UL/xm',
                'cant_orders' => 0,
                'peoples_id' => NULL,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => 'Leonardo',
                'email' => 'webmasterscity@hotmail.com',
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 0,
                'remember_token' => NULL,
                'created_at' => '2020-01-14 15:06:25',
                'updated_at' => '2020-01-24 12:33:01',
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => '{"locale":"en"}',
            ),
            1 => 
            array (
                'id' => 14,
                'last_ip' => NULL,
                'last_activity' => '2020-01-23 14:45:09',
                'password' => '$2y$10$tLtJbxbUpUcYzEFWAG/TN.mM5y6qSmPvSAvzYbZX7slH/p35RlIG6',
                'cant_orders' => 0,
                'peoples_id' => NULL,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 0,
                'remember_token' => 'VK89zXStfkweol8SG7wAaLjhp9hFG4b7I42ID319IEvi1j7GoycbNAO767HT',
                'created_at' => '2020-01-23 18:45:09',
                'updated_at' => '2020-01-27 00:04:52',
                'avatar' => 'users/default.png',
                'role_id' => 3,
                'settings' => '{"locale":"es"}',
            ),
            2 => 
            array (
                'id' => 15,
                'last_ip' => NULL,
                'last_activity' => '2020-02-21 18:19:10',
                'password' => '$2y$10$OIMJ2r4GFZ.8bSlwy3N7m.ASNhaOBa45VbuaxtFEZrdZucnKoJi4S',
                'cant_orders' => 0,
                'peoples_id' => 2,
                'coins_id' => 1,
                'groups_id' => 1,
                'name' => 'Leonardo Melendez',
                'email' => 'ds000082@gmail.com',
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 0,
                'remember_token' => NULL,
                'created_at' => '2020-02-21 22:19:09',
                'updated_at' => '2020-02-21 22:19:09',
                'avatar' => 'users/default.png',
                'role_id' => 2,
                'settings' => NULL,
            ),
            3 => 
            array (
                'id' => 16,
                'last_ip' => NULL,
                'last_activity' => '2020-02-23 15:44:31',
                'password' => '$2y$10$UGUBw1GJtCofbYeI.AMJQec8vyqQfkKk1ERRNx1WMKSgbUcjfRVrO',
                'cant_orders' => 0,
                'peoples_id' => 3,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => 'Francisco suarez',
                'email' => 'prueba@prueba.com',
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 0,
                'remember_token' => NULL,
                'created_at' => '2020-02-23 19:44:30',
                'updated_at' => '2020-02-23 21:41:13',
                'avatar' => 'users/default.png',
                'role_id' => 2,
                'settings' => '{"locale":"es"}',
            ),
            4 => 
            array (
                'id' => 13,
                'last_ip' => NULL,
                'last_activity' => '2020-01-22 23:04:38',
                'password' => '$2y$10$pBP8efPcAz93vf9x65h64e.b7KfPlqpeh3uI2XV1YT8e5IVDDuazi',
                'cant_orders' => NULL,
                'peoples_id' => 1,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => 'leo',
                'email' => 'i@gmail.com',
                'email_verified_at' => NULL,
                'failed_attempts' => NULL,
                'purchase_quantity' => NULL,
                'remember_token' => 'W5rRA4lq2onDIr4t5AUKOk7ERSTcw6rsC25M2ZnWOJc3K6scVgy71fEtd5fC',
                'created_at' => '2020-01-23 03:04:38',
                'updated_at' => '2020-01-24 12:49:36',
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => '{"locale":"es"}',
            ),
        ));
        
        
    }
}