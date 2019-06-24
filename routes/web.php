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

//Termos e condições
Route::get('terms', 'TermsController@index');
Route::get('terms', 'TermsController@index')->name('terms');

//Politica e Privacidade
Route::get('policy', 'PolicyController@index');
Route::get('policy', 'PolicyController@index')->name('policy');

//Politica e Privacidade
Route::get('ask', 'QuestionController@index');
Route::get('ask', 'QuestionController@index')->name('ask');



// Backend
//Checkout Products
Route::get('dash', 'DashController@index');
Route::get('dash', 'DashController@index')->name('dash');

//Social NetWork
Route::get('social', 'SocialController@index');
Route::get('social', 'SocialController@index')->name('social');
Route::get('social/edit/{id}',           ['as' => 'social.edit',    'uses' => 'SocialController@edit']); 
Route::put('social/update/{id}',         ['as' => 'social.update',  'uses' => 'SocialController@update']);
Route::delete('social/destroy/{id}',     ['as' => 'social.destroy', 'uses' => 'SocialController@destroy']);
Route::post('social', 'SocialController@store');

//Menu
Route::get('menu', 'MenuController@index')->name('menu');
Route::get('menu/edit/{id}',           ['as' => 'menu.edit',    'uses' => 'MenuController@edit']); 
Route::put('menu/update/{id}',         ['as' => 'menu.update',  'uses' => 'MenuController@update']);
Route::delete('menu/destroy/{id}',     ['as' => 'menu.destroy', 'uses' => 'MenuController@destroy']);
Route::post('menu', 'MenuController@store');

//Settings
Route::get('setting', 'SettingController@index')->name('setting');
Route::get('setting/edit/{id}',           ['as' => 'setting.edit',    'uses' => 'SettingController@edit']); 
Route::put('setting/update/{id}',         ['as' => 'setting.update',  'uses' => 'SettingController@update']);
Route::delete('setting/destroy/{id}',     ['as' => 'setting.destroy', 'uses' => 'SettingController@destroy']);
Route::post('setting', 'SettingController@store');

//Paginas
Route::get('pagina', 'PaginaController@index')->name('pagina');
Route::get('pagina/edit/{id}',           ['as' => 'pagina.edit',    'uses' => 'PaginaController@edit']); 
Route::put('pagina/update/{id}',         ['as' => 'pagina.update',  'uses' => 'PaginaController@update']);
Route::delete('pagina/destroy/{id}',     ['as' => 'pagina.destroy', 'uses' => 'PaginaController@destroy']);
Route::post('pagina', 'PaginaController@store');

//Tabela das descricoes
Route::post('desc', 'DescController@store');
Route::get('desc/edit/{id}/{idpage}',         ['as' => 'desc.edit',    'uses' => 'DescController@edit']); 
Route::put('desc/update/{id}',                ['as' => 'desc.update',  'uses' => 'DescController@update']);
Route::delete('desc/destroy/{id}/{idpage}',   ['as' => 'desc.destroy', 'uses' => 'DescController@destroy']);

//Prazos
Route::get('prazo', 'PrazosController@index')->name('prazo');
Route::get('prazo/edit/{id}',           ['as' => 'prazo.edit',    'uses' => 'PrazosController@edit']); 
Route::put('prazo/update/{id}',         ['as' => 'prazo.update',  'uses' => 'PrazosController@update']);
Route::delete('prazo/destroy/{id}',     ['as' => 'prazo.destroy', 'uses' => 'PrazosController@destroy']);
Route::post('prazo', 'PrazosController@store');


//Banner
Route::get('banner', 'BannerController@index')->name('banner');
Route::get('banner/edit/{id}',           ['as' => 'banner.edit',    'uses' => 'BannerController@edit']); 
Route::put('banner/update/{id}',         ['as' => 'banner.update',  'uses' => 'BannerController@update']);
Route::delete('banner/destroy/{id}',     ['as' => 'banner.destroy', 'uses' => 'BannerController@destroy']);
Route::post('banner', 'BannerController@store');


//BannerLines
Route::get('bannerlines', 'BannerLinesController@index')->name('bannerlines');
Route::get('bannerlines/edit/{id}',           ['as' => 'bannerlines.edit',    'uses' => 'BannerLinesController@edit']); 
Route::put('bannerlines/update/{id}',         ['as' => 'bannerlines.update',  'uses' => 'BannerLinesController@update']);
Route::delete('bannerlines/destroy/{id}',     ['as' => 'bannerlines.destroy', 'uses' => 'BannerLinesController@destroy']);
Route::post('bannerlines', 'BannerLinesController@store');


//PageBanner
Route::post('pagebanner', 'PageBannerController@store');

