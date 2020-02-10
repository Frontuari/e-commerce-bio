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
                'remember_token' => 'jU4bkAuhqzsCkGEmuCcsOpxQR5gnUn6aueRIHqW4hUvMy3aMzH7UJI1xYKKB',
                'created_at' => '2020-01-23 18:45:09',
                'updated_at' => '2020-01-27 00:04:52',
                'avatar' => 'users/default.png',
                'role_id' => 3,
                'settings' => '{"locale":"es"}',
            ),
            2 => 
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
                'remember_token' => '8bn4MtZz9cabNKCQqr8N8MfaRDGaUK0jdlWsl35nr1iUjqEKJCP2BKrCrmdo',
                'created_at' => '2020-01-23 03:04:38',
                'updated_at' => '2020-01-24 12:49:36',
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => '{"locale":"es"}',
            ),
        ));
        
        
    }
}