<?php

use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Shop'], function() {
	Route::get('/shop', 'IndexController')->name('shop.index');
});



Route::group(['namespace' => 'Product'], function() {
	Route::get('/shop/catalog', 'IndexController')->name('product.index');
	Route::get('/shop/catalog/product/{product}', 'ShowController')->name('product.show');
});