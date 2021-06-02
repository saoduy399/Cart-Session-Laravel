<?php

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

Route::get("/", [\App\Http\Controllers\ProductController::class, "show"])->name("show");
Route::get('/demoSession', function(){
   session([
      'id' => 'Duy',
   ]);
   session()->push('id', 'Khoi');

});
Route::get("/clear-session", function(){
//    session()->flush();
    session()->forget('id');
});
Route::get("/login", [\App\Http\Controllers\ProductController::class, "showLoginForm"])->name("showLoginForm");
Route::post("/login", [\App\Http\Controllers\ProductController::class, "login"])->name("Login");
Route::prefix("product")->group(function(){
    Route::get("/", [\App\Http\Controllers\ProductController::class, "index"])->name("showProducts");
});

Route::prefix("/cart")->group(function(){
    Route::get("/", [\App\Http\Controllers\CartController::class, "showCart"])->name("showCart");
    Route::get("/addToCart/{id}",[\App\Http\Controllers\CartController::class, "addToCart"])->name("addToCart");
});
