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
                'validateemail' => NULL,
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 1,
                'remember_token' => NULL,
                'created_at' => '2020-02-23 19:44:30',
                'updated_at' => '2020-02-23 21:41:13',
                'avatar' => 'users/default.png',
                'role_id' => 2,
                'settings' => '{"locale":"es"}',
            ),
            1 => 
            array (
                'id' => 14,
                'last_ip' => NULL,
                'last_activity' => '2020-01-23 14:45:09',
                'password' => '$2y$10$DnkYjEZbSX9hUlRYgQvlMOKhZNs0PRVmcn/t6RAj3dyxxSX48xnni',
                'cant_orders' => 0,
                'peoples_id' => NULL,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => 'Administrador',
                'email' => 'admin751@admin.com',
                'validateemail' => NULL,
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 0,
                'remember_token' => 'gS8IM9BrJVPXqozpdGYypI2bvLxAYUerwZvqrQw4yUb5bqKB3sQMKeVJ3oEV',
                'created_at' => '2020-01-23 18:45:09',
                'updated_at' => '2020-04-13 21:54:13',
                'avatar' => 'users/default.png',
                'role_id' => 3,
                'settings' => '{"locale":"es"}',
            ),
            2 => 
            array (
                'id' => 17,
                'last_ip' => NULL,
                'last_activity' => '2020-04-14 08:53:06',
                'password' => '$2y$10$o4JFbXSpxaFOx3GyvSvMiODUzfio3TxlmI/Hbt.kdTumKa0UrCDqy',
                'cant_orders' => 0,
                'peoples_id' => NULL,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => NULL,
                'email' => 'graficoa@gmail.com',
                'validateemail' => NULL,
                'email_verified_at' => NULL,
                'failed_attempts' => 0,
                'purchase_quantity' => 0,
                'remember_token' => 'LbOehgYs7njqRoZzURpqO05GSjunhlZabR1LlknxxAx7XjYgUZQYP27DVfst',
                'created_at' => '2020-04-14 12:53:05',
                'updated_at' => '2020-04-14 12:53:05',
                'avatar' => 'users/default.png',
                'role_id' => 4,
                'settings' => '{"locale":"es"}',
            ),
            3 => 
            array (
                'id' => 13,
                'last_ip' => NULL,
                'last_activity' => '2020-01-22 23:04:38',
                'password' => '$2y$10$AI/wioGCJX2NxFgRv27Fce0ILU0xR58AADTB0cQrbYsbAHoJPpgcq',
                'cant_orders' => NULL,
                'peoples_id' => NULL,
                'coins_id' => NULL,
                'groups_id' => NULL,
                'name' => 'leo',
                'email' => 'superadmin777@gmail.com',
                'validateemail' => NULL,
                'email_verified_at' => NULL,
                'failed_attempts' => NULL,
                'purchase_quantity' => NULL,
                'remember_token' => 'wPCMDulKkFF8nxA2xwSlTuhOjkyp90gBKTSY9qBZ9kGL6XHw7f6o1snz6rNq',
                'created_at' => '2020-01-23 03:04:38',
                'updated_at' => '2020-04-13 21:49:46',
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => '{"locale":"es"}',
            ),
        ));
        
        
    }
}