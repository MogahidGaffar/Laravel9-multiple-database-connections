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

Route::get('/', function () {
    return view('welcome');
});

  
/*------------------------------------------
--------------------------------------------
Getting Records of Mysql Database Connections
--------------------------------------------
--------------------------------------------*/

Route::get('/get-mysql-products', function () {
    $products = DB::table("products")->get();
      
    dd($products);
});
  
/*------------------------------------------
--------------------------------------------
Getting Records of Mysql Second Database Connections
--------------------------------------------
--------------------------------------------*/
Route::get('/get-mysql-second-products', function () {
    $products = DB::connection('mysql_second')->table("products")->get();
      
    dd($products);
});
