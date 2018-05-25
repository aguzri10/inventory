<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'stock'];
}
