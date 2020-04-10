<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coin;
use App\Advs;
use App\Product;
use Illuminate\Support\Facades\DB;

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
        
        $Slider = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("top")).'%'])->orderBy('order','ASC')->get();
        $Medio = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("medio")).'%'])->orderBy('order','ASC')->get();
        $Medio_Bajo = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("medio_bajo")).'%'])->orderBy('order','ASC')->get();
        $footer = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("footer")).'%'])->orderBy('order','ASC')->get();

        $MostRecent = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('created_at','desc')
        ->take(10)
        ->get();

        $MostView = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('qty_view','desc')
        ->take(10)
        ->get();

        $MostSold = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('qty_sold','desc')
        ->take(10)
        ->get();

        $BestPrice = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('price','asc')
        ->take(10)
        ->get();

        $Combos = Product::where('products.status','A')
        ->where('is_combo',true)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->take(8)
        ->get();

        return view("home",[
            "tasa_dolar"=>$Coin->rate,
            "sliders"=>$Slider,
            "medio"=>$Medio,
            "medio_bajo"=>$Medio_Bajo,
            "recent"=>$MostRecent,
            "viewed"=>$MostView,
            "sold"=>$MostSold,
            "bestprice"=>$BestPrice,
            "combos"=>$Combos,
            "footer"=>$footer
        ]);
    }
}
