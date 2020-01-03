<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    protected $fillable = ['id', 'name', 'description', 'avatar', 'status'];
    
    public function subcategories()
    {
        return $this->hasMany("App\ProductSubcategory");
    }
}
