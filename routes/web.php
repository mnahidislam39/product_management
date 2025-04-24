<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [ProductController::class, 'index']);

Route::get('/', [ProductController::class, 'index']);
// Resource route for ProductController (handles CRUD routes)
Route::resource('products', ProductController::class);
