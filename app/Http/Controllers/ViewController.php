<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function index()
    {
        $title = "Lulubuy Test";

        return view('acceuil', compact('title'));
    }
}