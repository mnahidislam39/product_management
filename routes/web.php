<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Default homepage route
Route::get('/', function () {
    return view('products.index');
});

// Resource route for ProductController (handles CRUD routes)
Route::resource('products', ProductController::class);
