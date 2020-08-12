<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KpisController extends Controller
{
    public function TransactionsForPeriod(){

    	$title = "Transacciones por Periodo";

    	return view('kpis.transactions_for_period',['title' => $title]);
    }
}
