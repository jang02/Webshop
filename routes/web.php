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
    return view('home');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/category/{category}', 'UserController@showCategory')->name('show-category');
Route::get('/product/{product}', 'UserController@showProduct')->name('show-product');
Route::get('/addToCart/{product}', 'UserController@addToCart')->name('add-to-cart');
Route::get('/cart', 'UserController@showCart')->name('show-cart');
Route::post("/cart/set", ["before" => "csrf", "uses" => "UserController@setCart"])->name("cart-set");
Route::get('/order', "UserController@finalizeOrder")->name("finalize-order");
Route::get('/orderlist', "UserController@orderList")->name("orderList");
Route::post("/order/handleorder", "UserController@handleOrder")->name("handle-order");

Route::group(['middleware' => 'App\Http\Middleware\isAdmin'], function() {
    Route::get('/adminpanel', 'AdminController@panel')->name('adminpanel');
});
