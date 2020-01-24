<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transports extends Model
{
    public function getPriceAttribute($value)
    {
        return number_format($value, 2, '.', '');
    }
}
