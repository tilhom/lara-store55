<?php

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

Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::view('/about', 'about');
Route::view('/add-to-wishlist', 'add-to-wishlist');
Route::view('/blog', 'blog');
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/contact', 'contact');
Route::view('/order', 'order');
Route::view('/product-detail', 'product-detail');
