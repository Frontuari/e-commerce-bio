<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'administrador',
                'display_name' => 'Administrador',
                'created_at' => '2020-01-23 18:30:17',
                'updated_at' => '2020-01-23 18:30:17',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'super',
                'display_name' => 'Super Usuario',
                'created_at' => '2020-01-14 15:06:25',
                'updated_at' => '2020-01-23 18:30:32',
            ),
            2 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuario normal',
                'created_at' => '2020-01-14 15:08:46',
                'updated_at' => '2020-01-23 18:31:08',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'admin',
                'display_name' => 'Super Usuario',
                'created_at' => '2020-01-23 19:54:58',
                'updated_at' => '2020-01-27 00:38:25',
            ),
        ));
        
        
    }
}