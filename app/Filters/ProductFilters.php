<?php

namespace App\Filters;

use App\Product;
use Illuminate\Http\Request;

class ProductFilters extends QueryFilters
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function cat($id) {
        return $this->builder->join("det_sub_categories","det_sub_categories.products_id","=","products.id")->where('det_sub_categories.sub_categories_id','=',$id);
    }

    public function search($term) {
        if(isset($term) && !empty($term))
            return $this->builder->whereRaw('LOWER(products.name) LIKE ?', ['%'.trim(strtolower($term)).'%']);
    }

    public function precio($precio) {
        $arr = explode(",",$precio);
        $min = $arr[0];
        $max = $arr[1];
        return $this->builder->whereRaw('(price / (select rate from coins where id = ?)) > ? and (price / (select rate from coins where id = ?)) < ?',[1,$min,1,$max]);
    }
  
    public function order($type) {
        if($type == "AZasc" || $type=="ZAdesc") {
            return $this->builder->orderBy('products.name', (!$type || $type == 'ZAdesc') ? 'desc' : 'asc');
        }else if ($type == "Pasc" || $type=="Pdesc"){
            return $this->builder->orderBy('products.price', (!$type || $type == 'Pdesc') ? 'desc' : 'asc');
        }
    }

    public function mr($term = null) {
        return $this->builder->orderBy('products.created_at','desc');
    }

    public function mb($term = null) {
        return $this->builder->orderBy('products.qty_view','desc');
    }

    public function mv($term = null) {
        return $this->builder->orderBy('products.qty_sold','desc');
    }

    public function mj($term = null) {
        return $this->builder->orderBy('products.price','asc');
    }


}
