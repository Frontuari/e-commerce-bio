<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Coin = Coin::where("id",1)->first();
        return view("home",["tasa_dolar"=>$Coin->rate]);
    }
}
