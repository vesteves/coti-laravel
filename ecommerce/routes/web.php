<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [
    ProductController::class, 'index'
]);

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

Route::prefix('orders')->group(function () {
    Route::get('/', [
        OrderController::class, 'index'
    ]);

    Route::post('/', [
        OrderController::class, 'store'
    ]);
});

Route::get('/email', [EmailController::class, 'email']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
