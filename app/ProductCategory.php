<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'products_categories';

    public function subcategories()
    {
        return $this->hasMany("App\ProductSubcategory");
    }
}
