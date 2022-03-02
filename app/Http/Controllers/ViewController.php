<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $title = "Lulubuy Test";

        $products = Product::all();

        return view('acceuil', compact('title', "products"));
    }
}