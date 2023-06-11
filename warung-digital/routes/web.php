<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryProductController;

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

// landing page
Route::get('/', function () {
    return view('/landing-page.home',['title' => 'Home']);
});

// Dashboard
Route::get('/dashboard', function () {
    return view('/dashboard.dashboard',['title' => 'Dashboard']);
});

// Category Product
Route::get('/category-product',[CategoryProductController::class,'index']);
Route::get('/category-create',[CategoryProductController::class,'create']);
Route::post('/category-store',[CategoryProductController::class,'store']);
Route::get('/category-edit/{id}',[CategoryProductController::class,'edit']);
Route::put('/category-update',[CategoryProductController::class,'update']);
Route::get('/category-delete/{id}',[CategoryProductController::class,'delete']);
