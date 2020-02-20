<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\ProductCategory;
	use App\Coin;

	class CatalogController extends Controller
	{

		function index() {
			if(isset($_GET['cat'])){
				$category_id = filter_input(INPUT_GET, "cat",FILTER_VALIDATE_INT);
				$category = ProductCategory::where('id',$category_id)->get();
				$category = json_decode($category);
				$title = $category[0]->name;
			}else{
				$title = 'Catalogo';
			}
			
			$Coin = Coin::where("id",1)->first();

			return view("catalog",["title"=>$title,"tasa_dolar"=>$Coin->rate]);
		}
	}
