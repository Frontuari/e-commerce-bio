<?php

use Illuminate\Database\Seeder;

class DetBankOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('det_bank_orders')->delete();
        
        
        
    }
}