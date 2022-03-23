<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_model', 'product_brand', 'BarCode', 'product_stock', 'product_price'];
}
