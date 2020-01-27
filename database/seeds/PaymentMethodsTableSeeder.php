<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Transferencia Bancaria',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-24 16:05:58',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Tarjeta de crédito',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:07:00',
                'updated_at' => '2020-01-24 16:07:00',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Transferencia Zelle',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:08:02',
                'updated_at' => '2020-01-24 19:33:46',
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Pago Dólar',
                'description' => 'Inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:06:31',
                'updated_at' => '2020-01-24 19:51:45',
            ),
        ));
        
        
    }
}