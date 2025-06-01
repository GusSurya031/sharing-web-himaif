<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/about', [HomeController::class, 'index']);
Route::post('/create-product', [ProductController::class, 'store']);
// Route::get('/', [HomeController::class, 'index']);
