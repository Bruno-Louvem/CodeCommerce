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

Route::pattern('id','[0-9]');

Route::group(['prefix'=>'admin'],function(){
    //Rotas de categorias
    Route::group(['prefix'=>'categories'],function(){
        //Listagem de Categorias
        Route::get('/', ['as'=>'admin_category_home','uses' => 'AdminCategoriesController@index']);
        //Detalhe da Categoria
        Route::get('/show/{id}', ['as'=>'admin_category_show','uses' => 'AdminCategoriesController@show']);
        //Form de cadastro
        Route::get('new', ['as'=>'admin_category_new','uses' => 'AdminCategoriesController@new']);
        //Form de edição
        Route::get('edit/{id}', ['as'=>'admin_category_edit','uses' => 'AdminCategoriesController@edit']);
        //Action de cadastro
        Route::post('/',['as'=>'admin_category_create','uses' => 'AdminCategoriesController@create']);
        //Action de edição
        Route::put('/',['as'=>'admin_category_update','uses' => 'AdminCategoriesController@update']);
        //Action de deleção
        Route::delete('/',['as'=>'admin_category_delete','uses' => 'AdminCategoriesController@delete']);
    });
    //Rotas de produtos
    Route::group(['prefix'=>'products'],function(){
        //Listagem de Produtos
        Route::get('/', ['as'=>'admin_product_home','uses' => 'AdminProductsController@index']);
        //Detalhe de Produtos
        Route::get('/show/{id}', ['as'=>'admin_product_show','uses' => 'AdminProductsController@show']);
        //Form de cadastro
        Route::get('new', ['as'=>'admin_product_new','uses' => 'AdminProductsController@new']);
        //Form de edição
        Route::get('edit/{id}', ['as'=>'admin_product_edit','uses' => 'AdminProductsController@edit']);
        //Action de cadastro
        Route::post('/',['as'=>'admin_product_create','uses' => 'AdminProductsController@create']);
        //Action de edição
        Route::put('/',['as'=>'admin_product_update','uses' => 'AdminProductsController@update']);
        //Action de deleção
        Route::delete('/',['as'=>'admin_product_delete','uses' => 'AdminProductsController@delete']);
    });

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
