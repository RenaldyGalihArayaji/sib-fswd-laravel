<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\DaftarProductController;
use App\Http\Controllers\categoryProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/home',["title" => "Home"]);
});

Route::get('/dashboard', function () {
    return view('dashboards.dashboard',["title" => "Dashboard"]);
});

// product Category
Route::get('/category-product',[categoryProductController::class,'index']);
Route::get('/category-create',[categoryProductController::class,'create']);
Route::post('/category-store',[categoryProductController::class,'store']);
Route::get('/category-edit/{id}',[categoryProductController::class,'edit']);
Route::put('/category-update',[categoryProductController::class,'update']);
Route::get('/category-delete/{id}',[categoryProductController::class,'delete']);

// Routo Daftar Product
Route::get('/daftar-product',[DaftarProductController::class,'index']);
Route::get('/daftar-create',[DaftarProductController::class,'create']);
Route::post('/daftar-store',[DaftarProductController::class,'store']);




// Slider
Route::get('/slider',[sliderController::class,'index']);
Route::get('/slider-create',[sliderController::class,'create']);
Route::post('/slider-store',[sliderController::class,'store']);
Route::get('/slider-delete/{id}',[sliderController::class,'delete']);
Route::get('/slider-edit/{id}',[sliderController::class,'edit']);
Route::put('/slider-update',[sliderController::class,'update']);



// Route Login
Route::get('/login',[loginController::class,'index']);
Route::post('/login',[loginController::class,'authentication']);

// Route Registrasi
Route::get('/registrasi',[registrasiController::class,'index']);
Route::post('/registrasi',[registrasiController::class,'store']);
