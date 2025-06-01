<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // SELECT * FROM PRODUCTS;

        // dd($products);


        return view('about', compact('products') );
    }

    public function time()
    {
        $time = Carbon::now();
    }
}
