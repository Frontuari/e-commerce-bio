<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transports extends Model
{
    public function getPriceAttribute($value)
    {
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
    }
    public function setPriceAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['price']=$fg->set_formato_moneda($value);
    }
}
