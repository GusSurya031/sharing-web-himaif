<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // SELECT * FROM PRODUCTS;

        return view('about', compact('products') );
    }
}
