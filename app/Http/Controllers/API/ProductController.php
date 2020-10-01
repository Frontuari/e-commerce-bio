<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Product;
use App\Filters\ProductFilters;
use Validator;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
    public function index(Request $request,ProductFilters $filters)
    {
        $data = $request->all();
        $limit = ($data["limit"] ?? 10);
        
        $Products = Product::filter($filters)
        ->select("products.*",DB::raw("(case when products.mark_keyword is not null then concat (products.name, ' <span class=\"oferta\">',products.mark_keyword,'</span>') end) as name_insuperable"),DB::raw("taxes.value as impuesto"),DB::raw("( (products.price * taxes.value / 100) + products.price) as calculado, ((products.qty_avaliable * products.porc_stock) / 100) as qty_avaliable"))
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->where('products.status','A')
        ->where(DB::raw("((products.qty_avaliable * products.porc_stock) / 100)"),">",0)
        ->groupBy("products.id","taxes.value")
        ->paginate($limit);

        // dd($Products->toSql());

        return $this->sendResponse($Products, 'Product retrieved successfully.');
    }

    public function show($id)
    {
        $Product = Product::find($id);

        if (is_null($Product)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse(new ProductResource($Product), 'Product retrieved successfully.');
    }

    public function search($name)
    {
        $texto=mb_strtolower($name);
        $arr=explode(' ',$texto);
        $otro='';
        if(count($arr)>1){
            foreach($arr as $s){
                $otro.="$s&";
            }
            $otro=rtrim($otro,'&');
        }else{
            $otro=$texto;
        }

        $Product =  DB::table('products')
        ->select("products.*")
        ->leftJoin("det_product_taxes","det_product_taxes.products_id","=","products.id")
        ->leftJoin("taxes","taxes.id","=","det_product_taxes.taxes_id")
        ->where("products.status","A")
        ->where("products.qty_avaliable",">",0)
        ->whereRaw("( ( to_tsvector(products.name) @@ to_tsquery('$otro') OR to_tsvector(products.keyword) @@ to_tsquery('$otro') ) OR (products.keyword ilike '%$otro%' OR products.name ilike '%$otro%') )")
        ->groupBy("products.id")
        ->orderBy("products.name")
        ->take(10)
        ->get();

        // dd($Product->toSql());

        if (is_null($Product)) {
            return $this->sendError('Product not found.');
        }
        return $this->sendResponse($Product, 'Product retrieved successfully.');
    }

    public function most_recent()
    {
        $Products = Product::where('status','A')->orderBy('created_at','desc')->take(10)->get();
        return $this->sendResponse(ProductResource::collection($Products), 'Product retrieved successfully.');
    }
    public function most_viewed()
    {
        $Products = Product::where('status','A')->orderBy('qty_view','desc')->take(10)->get();
        return $this->sendResponse(ProductResource::collection($Products), 'Product retrieved successfully.');
    }

    public function most_sold()
    {
        $Products = Product::where('status','A')->orderBy('qty_sold','desc')->take(10)->get();
        return $this->sendResponse(ProductResource::collection($Products), 'Product retrieved successfully.');
    }

    public function best_price()
    {
        $Products = Product::where('status','A')->orderBy('price','asc')->take(10)->get();
        return $this->sendResponse(ProductResource::collection($Products), 'Product retrieved successfully.');
    }

    public function getTags() {
        $data = Product::select(DB::raw("DISTINCT trim(keyword) as key"))->where('status','A')->whereNotNull('keyword')->take(10)->get();
        $keywords = [];
        foreach($data as $i => $d) {
            $tmp = explode(" ", $d->key);
            foreach($tmp as $j => $t) {
                array_push($keywords, trim($t));
            }
        }
        $keywords = array_values(array_unique($keywords));
        return $this->sendResponse($keywords);
    }

    public function bysku($sku = null){
        
        $data = Product::where('sku','=',$sku)->get();

        return response()->json($data);
    }
}
