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
        
        $Products = Product::filter($filters)->where('status','A')->paginate($limit);
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
        $Product =  DB::table('products')->whereRaw('LOWER(name) LIKE ?', ['%'.trim(strtolower($name)).'%'])->take(10)->get();
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
}
