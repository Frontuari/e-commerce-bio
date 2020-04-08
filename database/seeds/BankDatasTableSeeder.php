<?php

use Illuminate\Database\Seeder;

class BankDatasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_datas')->delete();
        
        \DB::table('bank_datas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titular' => 'Biomercado C.A.',
                'description' => '0134-2344-2342-1234-1234
Rif: J40355966',
                'account_type' => 'C',
                'banks_id' => 1,
                'status' => 'A',
                'created_at' => '2020-01-24 20:56:21',
                'updated_at' => '2020-01-24 20:56:21',
                'payment_methods_id' => 1,
                'coins_id' => 2,
            ),
            1 => 
            array (
                'id' => 3,
                'titular' => 'Biomercado C.A.',
                'description' => '0102-2344-2342-1234-1234
Rif: J40355966',
                'account_type' => 'C',
                'banks_id' => 2,
                'status' => 'A',
                'created_at' => '2020-01-24 20:56:21',
                'updated_at' => '2020-01-24 20:56:21',
                'payment_methods_id' => 1,
                'coins_id' => 2,
            ),
            2 => 
            array (
                'id' => 4,
                'titular' => 'Biomercados',
                'description' => 'Teléfono: 04145138790
Cédula: 18671986
Código del banco: 0102',
                'account_type' => 'O',
                'banks_id' => 2,
                'status' => 'A',
                'created_at' => '2020-04-07 16:33:42',
                'updated_at' => '2020-04-07 16:33:42',
                'payment_methods_id' => 2,
                'coins_id' => 2,
            ),
            3 => 
            array (
                'id' => 5,
                'titular' => '-',
                'description' => NULL,
                'account_type' => 'O',
                'banks_id' => 3,
                'status' => 'A',
                'created_at' => '2020-04-07 18:29:19',
                'updated_at' => '2020-04-07 18:29:19',
                'payment_methods_id' => 3,
                'coins_id' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'titular' => '-',
                'description' => NULL,
                'account_type' => 'O',
                'banks_id' => 3,
                'status' => 'A',
                'created_at' => '2020-04-07 18:29:53',
                'updated_at' => '2020-04-07 18:29:53',
                'payment_methods_id' => 3,
                'coins_id' => 2,
            ),
            5 => 
            array (
                'id' => 2,
                'titular' => 'Biomercado LLC',
                'description' => '123456789',
                'account_type' => 'C',
                'banks_id' => 4,
                'status' => 'A',
                'created_at' => '2020-01-24 20:56:21',
                'updated_at' => '2020-04-08 16:31:34',
                'payment_methods_id' => 1,
                'coins_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'titular' => 'Biomercados',
                'description' => 'bio@gmail.com',
                'account_type' => 'O',
                'banks_id' => 5,
                'status' => 'A',
                'created_at' => '2020-04-08 16:33:57',
                'updated_at' => '2020-04-08 16:33:57',
                'payment_methods_id' => 4,
                'coins_id' => 1,
            ),
        ));
        
        
    }
}