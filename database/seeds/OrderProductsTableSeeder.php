<?php

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_products')->delete();
        
        
        
    }
}