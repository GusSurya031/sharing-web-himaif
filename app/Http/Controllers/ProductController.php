<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->all()); // Datanya : product_name, description

        // request -> validasi -> insert ke db
        // $validated = $request->validate([
        //     'product_name' => 'max:10'
        // ]);

        // INSERT () tabel ();
        Product::insert([
            'name' => $request->product_name,
            'description' => $request->description,
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        // Product::create([
        //     'name' => $request->product_name,
        //     'description' => $request->description,
        // ]);

        // Model -> Task, DB -> tasks
        // task_name, deadline (date), status(int -> 0 = pending, 1 = sukses, -1 = batal); 



        return redirect()->back();
    }
}
