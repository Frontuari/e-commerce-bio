<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coin;

class CartController extends Controller
{
    function index() {
        $Coin = Coin::where("id",1)->first();
        return view("cart",["tasa_dolar"=>$Coin->rate]);
    }
}
