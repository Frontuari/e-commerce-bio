<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packagings extends Model
{
    public function getValueAttribute($value)
    {
        return number_format($value, 2, '.', '');
    }
}
