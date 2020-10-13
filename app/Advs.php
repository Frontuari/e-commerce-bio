<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advs extends Model
{
    protected $table = 'advs';
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function save(array $options = []) 
    { 
        if (!$this->stores_id) { 
            $this->stores_id = $_SESSION['stores_id']; 
        } 
     
        parent::save(); 
    } 
}
