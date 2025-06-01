<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

// Route::get('/about', function() {
//     return view('about');
// });

Route::get('/about', [HomeController::class, 'index']);
