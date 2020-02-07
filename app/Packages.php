<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table='packages';

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
