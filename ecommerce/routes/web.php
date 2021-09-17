<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('create', [
        ProductController::class, 'create'
    ]);

    // http://localhost:8000/products
    Route::post('/', [
        ProductController::class, 'store'
    ]);

    Route::get('{product}', [
        ProductController::class, 'show'
    ]);
});
