<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'stock'];
}
