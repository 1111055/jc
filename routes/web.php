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


//caracteristicas do produto (Cor)
Route::get('color', 'ColorController@index')->name('color');
Route::get('color/edit/{id}',           ['as' => 'color.edit',    'uses' => 'ColorController@edit']); 
Route::put('color/update/{id}',         ['as' => 'color.update',  'uses' => 'ColorController@update']);
Route::delete('color/destroy/{id}',     ['as' => 'color.destroy', 'uses' => 'ColorController@destroy']);
Route::post('color', 'ColorController@store');

//caracteristicas do produto (Tamanhos)
Route::get('size', 'SizeController@index')->name('size');
Route::get('size/edit/{id}',           ['as' => 'size.edit',    'uses' => 'SizeController@edit']); 
Route::put('size/update/{id}',         ['as' => 'size.update',  'uses' => 'SizeController@update']);
Route::delete('size/destroy/{id}',     ['as' => 'size.destroy', 'uses' => 'SizeController@destroy']);
Route::post('size', 'SizeController@store');


//caracteristicas do produto (Categoria)
Route::get('categoria', 'CategoriaController@index')->name('categoria');
Route::get('categoria/edit/{id}',           ['as' => 'categoria.edit',    'uses' => 'CategoriaController@edit']); 
Route::put('categoria/update/{id}',         ['as' => 'categoria.update',  'uses' => 'CategoriaController@update']);
Route::delete('categoria/destroy/{id}',     ['as' => 'categoria.destroy', 'uses' => 'CategoriaController@destroy']);
Route::post('categoria', 'CategoriaController@store');

//caracteristicas do produto (Tamanhos)
Route::get('subcategoria', 'SubcategoriaController@index')->name('subcategoria');
Route::get('subcategoria/edit/{id}',           ['as' => 'subcategoria.edit',    'uses' => 'SubcategoriaController@edit']); 
Route::put('subcategoria/update/{id}',         ['as' => 'subcategoria.update',  'uses' => 'SubcategoriaController@update']);
Route::delete('subcategoria/destroy/{id}',     ['as' => 'subcategoria.destroy', 'uses' => 'SubcategoriaController@destroy']);
Route::post('subcategoria', 'SubcategoriaController@store');

//caracteristicas do produto (Tamanhos)
Route::get('familia', 'FamiliaController@index')->name('familia');
Route::get('familia/edit/{id}',           ['as' => 'familia.edit',    'uses' => 'FamiliaController@edit']); 
Route::put('familia/update/{id}',         ['as' => 'familia.update',  'uses' => 'FamiliaController@update']);
Route::delete('familia/destroy/{id}',     ['as' => 'familia.destroy', 'uses' => 'FamiliaController@destroy']);
Route::post('familia', 'FamiliaController@store');

//caracteristicas do produto (Tamanhos)
Route::get('subfamilia', 'SubfamiliaController@index')->name('subfamilia');
Route::get('subfamilia/edit/{id}',           ['as' => 'subfamilia.edit',    'uses' => 'SubfamiliaController@edit']); 
Route::put('subfamilia/update/{id}',         ['as' => 'subfamilia.update',  'uses' => 'SubfamiliaController@update']);
Route::delete('subfamilia/destroy/{id}',     ['as' => 'subfamilia.destroy', 'uses' => 'SubfamiliaController@destroy']);
Route::post('subfamilia', 'SubfamiliaController@store');

//Produto 
Route::get('produto', 'ProdutoController@index')->name('produto');
Route::get('produto/edit/{id}',           ['as' => 'produto.edit',    'uses' => 'ProdutoController@edit']); 
Route::put('produto/update/{id}',         ['as' => 'produto.update',  'uses' => 'ProdutoController@update']);
Route::delete('produto/destroy/{id}',     ['as' => 'produto.destroy', 'uses' => 'ProdutoController@destroy']);
Route::post('produto', 'ProdutoController@store');

//Tabelas associativas. 
Route::post('pagebanner', 'PageBannerController@store');
