<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urbanization extends Model
{
    protected $table = 'urbanizations';

    protected $fillable = ['name','status','city_id'];
}
