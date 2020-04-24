<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FuncionesGenerales;

class Products extends Model
{

    public function setPriceAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['price']=$fg->set_formato_moneda($value);
    }
    public function getPriceAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }

    public function setDiscountAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['discount']=$fg->set_formato_moneda($value);
    }
    public function getDiscountAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }
}
