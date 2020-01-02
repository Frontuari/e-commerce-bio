<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id', 'EAN', 'brands_id', 'description', 'description_short','discount','keyword','name','price','product_subcategories_id','promote','qty_avaliable','qty_sold','qty_view','qty_max','qty_min','record','status','stores_id','photo'];

    public function subcategories() {
        return $this->belongsTo('App\ProductSubcategory');
    }

    public function stores() {
        return $this->belongsTo('App\Store');
    }
    
    public function brands()
    {
		return $this->belongsTo('App\Brand');
	}

    public function taxes()
    {
        return $this->hasMany('App\ProductTax');
    }
}
