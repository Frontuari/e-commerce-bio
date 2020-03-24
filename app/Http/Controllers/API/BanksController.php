<?php

namespace App\Http\Controllers\API;

use App\Banks;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\DB;


class BanksController extends BaseController
{
    public function index()
    {
        $Banks = DB::select(DB::raw("SELECT b.*,
        STRING_AGG( CONCAT('Titular: ',bkd.titular,'\n Tipo de cuenta: ', (CASE WHEN bkd.account_type = 'C' THEN 'Corriente' ELSE 'AHORRO' END), '\n Moneda: ',c.name,'\n Cuenta: ',bkd.description) ,' || ') as cuentas
        from banks as b
        INNER JOIN bank_datas as bkd on bkd.banks_id = b.id
        INNER JOIN coins as c on c.id = bkd.coins_id
        group by b.id,bkd.banks_id"));
        return $this->sendResponse($Banks, 'Banks retrieved successfully.');
    }
}
