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
Auth::routes();

Route::get('/', 'Home\BookController@index')->name('index');
Route::post('/search','Home\BookController@search')->name('book.search');
Route::get('/cart', 'Home\CartController@index')->name('cart');
Route::get('/error404', 'Home\ThemeController@error404')->name('error404');
Route::post('/store/{book}','Home\CartController@store')->name('cart.store');
Route::post('/remove/{book}','Home\CartController@removeCart')->name('cart.remove');
Route::post('/update/{book}','Home\CartController@updateCart')->name('cart.update');
Route::get('/checkout', 'Home\CheckoutController@index')->name('checkout');
Route::post('/checkout/store','Home\CheckoutController@store')->name('checkout.store');
Route::get('/contact', 'Home\ThemeController@contact')->name('contact');
Route::get('/accountlogin', 'Home\ThemeController@accountlogin')->name('accountlogin');
Route::get('/accountregister', 'Home\ThemeController@accountregister')->name('accountregister');
Route::get('/single_product/{id}', 'Home\ThemeController@single_product')->name('single_product');

