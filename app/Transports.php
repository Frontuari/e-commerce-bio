<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transports extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
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
    public function save(array $options = []) 
    { 
        if (!$this->stores_id) { 
            $this->stores_id = $_SESSION['stores_id']; 
        } 
     
        parent::save(); 
    } 
}
