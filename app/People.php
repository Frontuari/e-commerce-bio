<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $fillable = ['id', 'rif', 'name', 'sex', 'birthdate','city_id','address','phone'];

}
