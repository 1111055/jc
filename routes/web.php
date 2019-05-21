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
//FrontEnd
// Home Page
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index')->name('home');


//About Company
Route::get('about', 'AboutController@index');
Route::get('about', 'AboutController@index')->name('about');

//Contactos Company
Route::get('contactos', 'ContactosController@index');
Route::get('contactos', 'ContactosController@index')->name('contactos');

//Checkout Products
Route::get('checkout', 'CheckoutController@index');
Route::get('checkout', 'CheckoutController@index')->name('checkout');


//Checkout Products
Route::get('wish', 'WishController@index');
Route::get('wish', 'WishController@index')->name('wish');

//detail produto
Route::get('produto', 'ProdutoController@index');
Route::get('produto', 'ProdutoController@index')->name('produto');


//show produtos
Route::get('shop', 'ShopController@index');
Route::get('shop', 'ShopController@index')->name('shop');

// Backend
//Checkout Products
Route::get('dash', 'DashController@index');
Route::get('dash', 'DashController@index')->name('dash');

//Social NetWork
Route::get('social', 'SocialController@index');
Route::get('social', 'SocialController@index')->name('social');
Route::get('social/edit/{id}',   'SocialController@edit');