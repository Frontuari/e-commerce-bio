<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    public function getRateAttribute($value)
    {
        return number_format($value, 2, '.', '');
    }
}
