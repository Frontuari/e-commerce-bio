<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $table = "subscription";
    protected $fillable = ['email'];

}
