<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    protected $table = 'products_subcategories';

    public function categories()
    {
        return $this->belongsTo("App\ProductCategory");
    }

    public function products()
    {
        return $this->hasMany("App\Product");
    }
}
