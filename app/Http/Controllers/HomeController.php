<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coin;
use App\Advs;
use App\ProductCategory;
use App\Product;
use App\Packages;
use App\Pages;
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

    function cambiarBarra($data) {
        return str_replace("\\", "/", $data);
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

        $Medio_Bajo = [];
        $Med = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("medio_bajo")).'%'])->orderBy('order','ASC')->get();
        foreach ($Med as $i => $m) {
            $m["image"] = $this->cambiarBarra($m["image"]);
            array_push($Medio_Bajo, $m);
        }
        $Medio_Bajo = json_encode($Medio_Bajo);

        $footer = [];
        $foot = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("footer")).'%'])->orderBy('order','ASC')->get();
        foreach ($foot as $i => $f) {
            $f["image"] = $this->cambiarBarra($f["image"]);
            array_push($footer, $f);
        }
        $footer = json_encode($footer);

        $Categories = [];
        $Cat = ProductCategory::where('status','A')->orderBy("order","asc")->take(4)->get();
        foreach ($Cat as $i => $c) {
            $c["image"] = $this->cambiarBarra($c["image"]);
            array_push($Categories, $c);
        }
        $Categories = json_encode($Categories);

        $MostRecent = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('created_at','desc')
        ->where("products.qty_avaliable",">",0)
        ->take(12)
        ->get();

        $MostView = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('qty_view','desc')
        ->where("products.qty_avaliable",">",0)
        ->take(12)
        ->get();

        $MostSold = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('qty_sold','desc')
        ->where("products.qty_avaliable",">",0)
        ->take(12)
        ->get();

        $BestPrice = Product::where('products.status','A')
        ->where('is_combo',false)
        ->select("products.*",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->orderBy('price','asc')
        ->where("products.qty_avaliable",">",0)
        ->take(12)
        ->get();

        $comboData = Packages::where('status','A')->take(8)->get();
        $Combos = [];
        
        foreach($comboData as $i => $c) {
            $total = 0;
            $cantTotal = 0;
            $c["products"] = DB::table("det_product_packages")
            ->select("products.*","det_product_packages.cant as cant_combo",DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado"))
            ->join("products","products.id","=","det_product_packages.products_id")
            ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
            ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
            ->where("det_product_packages.packages_id",$c["id"])
            ->get();
            foreach($c["products"] as $j => $p) {
                $cantTotal += $p->cant_combo;

                if($p->qty_avaliable >= $p->cant_combo) {
                    if($p->calculado > 0){
                        $total += ($p->calculado * $p->cant_combo);
                    }else {
                        $total += ($p->price * $p->cant_combo);
                    }
                }

            }
            $c["combo_price"] = $total;
            $c["cantTotal"] = $cantTotal;
            array_push($Combos,$c);
        }
        $Combos = json_encode($Combos);

        return view("home",[
            "tasa_dolar"=>$Coin->rate,
            "sliders"=>$Slider,
            "categories"=>$Categories,
            "medio_bajo"=>$Medio_Bajo,
            "recent"=>$MostRecent,
            "viewed"=>$MostView,
            "sold"=>$MostSold,
            "bestprice"=>$BestPrice,
            "combos"=>$Combos,
            "footer"=>$footer
        ]);
    }

    public function join() {
        return view("register");
    }
    public function recover() {
        return view("recover");
    }

    public function terminos() {
        $data = Pages::where("id",1)->get();
        return view("terminos",[
            "terms" => $data
        ]);
    }

    public function faq() {
        $data = Pages::where("id",2)->get();
        return view("faq",[
            "faqs" => $data
        ]);
    }
}