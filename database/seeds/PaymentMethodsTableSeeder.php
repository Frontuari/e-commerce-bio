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
                'id' => 2,
                'name' => 'Pago móvil',
                'description' => 'Inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:06:31',
                'updated_at' => '2020-02-26 14:34:49',
                'image' => 'payment-methods\\February2020\\YV0sIBxw3ubGugiUkOIa.png',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Tarjeta de crédito',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:07:00',
                'updated_at' => '2020-02-26 14:35:11',
                'image' => 'payment-methods\\February2020\\0aVqh8jHBRozqNV3kwv2.png',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Transferencia Zelle',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-01-24 16:08:02',
                'updated_at' => '2020-02-26 14:35:20',
                'image' => 'payment-methods\\February2020\\AgSYpWc1AF4zCkLevQCx.png',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Paypal',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-02-26 14:22:12',
                'updated_at' => '2020-02-26 14:37:50',
                'image' => 'payment-methods\\February2020\\4Ql6Ydzu0zWOFc5Jee4a.png',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Biowallet',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-02-26 14:21:57',
                'updated_at' => '2020-02-26 14:44:43',
                'image' => 'payment-methods\\February2020\\hrBIcjzZFLRBuGzPqabX.jpg',
            ),
            5 => 
            array (
                'id' => 1,
                'name' => 'Transferencia Bancaria',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-02-26 14:52:54',
                'image' => 'payment-methods\\February2020\\zOUo6uzCnFkmXPcnne7Z.png',
            ),
            6 => 
            array (
                'id' => 7,
            'name' => 'Criptomonedas (PagoDólar)',
                'description' => 'Procesado de inmediato',
                'time_minutes' => 0,
                'status' => 'A',
                'created_at' => '2020-02-26 14:22:28',
                'updated_at' => '2020-02-26 14:53:02',
                'image' => 'payment-methods\\February2020\\C2bNmODH1sMKxhuexeYA.png',
            ),
        ));
        
        
    }
}