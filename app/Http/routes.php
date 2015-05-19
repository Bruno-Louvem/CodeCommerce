<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//Inicio rotas categorias

//Listagem de Categorias
Route::get('admin/categories', 'AdminCategoriesController@index');
//Form de cadastro
Route::get('admin/categories/create', 'AdminCategoriesController@new');
//Form de edição
Route::get('admin/categories/edit', 'AdminCategoriesController@edit');
//Action de cadastro
Route::post('admin/categories','AdminCategoriesController@create');
//Action de edição
Route::put('admin/categories','AdminCategoriesController@update');
//Action de deleção
Route::delete('admin/categories','AdminCategoriesController@delete');
//Fim rotas Categorias

//Inicio rotas Produtos

//Listagem de Produtos
Route::get('admin/products', 'AdminProductsController@index');
//Form de cadastro
Route::get('admin/products/create', 'AdminProductsController@new');
//Form de edição
Route::get('admin/products/edit', 'AdminProductsController@edit');
//Action de cadastro
Route::post('admin/products','AdminProductsController@create');
//Action de edição
Route::put('admin/products','AdminProductsController@update');
//Action de deleção
Route::delete('admin/products','AdminProductsController@delete');
//Fim rotas Produtos


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
