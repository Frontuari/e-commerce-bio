<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public function save(array $options = []) 
    { 
        if (!$this->stores_id) { 
            $this->stores_id = $_SESSION['stores_id']; 
        } 
     
        parent::save(); 
    } 
}
