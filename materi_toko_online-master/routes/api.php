<?php

use App\Http\Controllers\ApiCustomerController;
use App\Http\Controllers\ApiProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Customer
Route::get('/customer', [ApiCustomerController::class, 'index']);
Route::post('/customer/store', [ApiCustomerController::class, 'store']);

// Produk
Route::get('/produk', [ApiProdukController::class, 'index']);
Route::post('/produk/store', [ApiProdukController::class, 'store']);