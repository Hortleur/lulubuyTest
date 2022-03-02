<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_id', 'product_model', 'product_model_alt', 'product_brand', 'BarCode', 'product_stock', 'product_price'];
}