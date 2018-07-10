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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', ['as'=>'vintage.public.index', 'uses'=>'Home\PageTemplateController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas da categoria.
Route::get('/categoria',  ['uses'=>'Produto\CategoriaController@index']);
Route::post('/categoria', ['uses'=>'Produto\CategoriaController@novaCategoria']);

//Rotas do produtos
Route::get('/produto',  ['uses'=>'Produto\ProdutoController@index']);
Route::post('/produto', ['as'=>'product.add.store', 'uses'=>'Produto\ProdutoController@store']);

Route::get('/produto/{id}',  ['as'=>'produto.delete', 'uses'=>'Produto\ProdutoController@delete']);
Route::post('/produto/upload', 'Produto\ProdutoController@upload')->name('upload_products');
Route::get('/produto/upload', 'Produto\ProdutoController@uploadPage');
