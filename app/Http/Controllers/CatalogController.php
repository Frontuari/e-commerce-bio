<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\ProductCategory;
	use App\Coin;
	use App\Product;
	use App\Advs;
	use Illuminate\Support\Facades\DB;

	class CatalogController extends Controller
	{

		function cambiarBarra($data) {
	        return str_replace("\\", "/", $data);
	    }

		function index() {

			$Ads = [];
	        $a = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("izq_producto")).'%'])->orderBy('order','ASC')->get();
	        foreach ($a as $i => $m) {
	            $m["image"] = $this->cambiarBarra($m["image"]);
	            array_push($Ads, $m);
	        }
	        $Ads = json_encode($Ads);

			if(isset($_GET['cat'])){
				$category_id = filter_input(INPUT_GET, "cat",FILTER_VALIDATE_INT);
				$category = ProductCategory::where('id',$category_id)->get();
				$category = json_decode($category);
				$title = $category[0]->name;
			}else{
				$title = 'Catalogo';
			}
			
			$Coin = Coin::where("id",1)->first();
			$k = json_encode($this->getTags());

			return view("catalog",[
				"title"=>$title,
				"tasa_dolar"=>$Coin->rate,
				"ads"=>$Ads,
				"tags"=>$k
			]);
		}

		private function getTags() {
	        $data = Product::select(DB::raw("DISTINCT trim(keyword) as key"))->where('status','A')->whereNotNull('keyword')->take(20)->get();
	        $keywords = [];
	        foreach($data as $i => $d) {
	            $tmp = explode(" ", $d->key);
	            foreach($tmp as $j => $t) {
	                array_push($keywords, trim($t));
	            }
	        }
	        $keywords = array_values(array_unique($keywords));
	        return $keywords;
	    }
	}
