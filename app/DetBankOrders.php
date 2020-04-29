<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetBankOrders extends Model
{

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
       // exit(request()->input('s')."dd");
    }
    public function getAmountAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }
     public function setAmountAttribute($value)
     {
         $fg= new FuncionesGenerales;
         $this->attributes['amount']=$fg->set_formato_moneda($value);
        // exit($this->attributes['amount']."s");
     }
}
