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
                'created_at' => '2020-01-24 20:56:21',
                'updated_at' => '2020-01-24 20:56:21',
                'payment_methods_id' => 1,
                'coins_id' => 2,
            ),
        ));
        
        
    }
}