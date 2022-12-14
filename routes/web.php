<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    //return "Hello world";
    return view('welcome');
});

Route::get("/getName/{name}",function($name){
    return "Hello ".$name;
});
Route::middleware(['cors'])->group(function () {
    Route::get("/getProductsfromDB",[ProductController::class, "index"]);
    Route::get("/getProducts",[ProductController::class, "getProducts"]);
});