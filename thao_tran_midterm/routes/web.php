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

Route::get('home', function () {
			    return view('homepage');
			});


Route::group(['prefix' => 'page/'], function () {
	Route::get('index',
			['as' 	=> 'home',
			'uses' 	=> 'pageController@getIndex'
	]);

	Route::get('loaisanpham',
			['as' 	=> 'loaisanpham',
			'uses' 	=> 'pageController@getProductType'
	]);
	Route::get('chitietsanpham',
			['as' 	=> 'chitietsanpham',
			'uses' 	=> 'pageController@getProductDetail'
	]);
	Route::get('lienhe',
			['as' 	=> 'lienhe',
			'uses' 	=> 'pageController@getContact'
	]);
	Route::get('gioithieu',
			['as' 	=> 'gioithieu',
			'uses' 	=> 'pageController@getAbout'
	]);

});	
			

Route::group(['prefix' => 'admin/product/'], function () {
	Route::get('add',
		['as' 	=> 'admin.product.getAddProduct',
		'uses' 	=> 'productController@getAddProduct'
	]);

	Route::get('list',
		['as' 	=> 'admin.product.getListProduct',
		'uses' 	=> 'productController@getListProduct'
	]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'productController@postAddProduct']);

	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteProduct',
		'uses' 	=> 'productController@getDeleteProduct'
	]);
	Route::get('edit/{id}', [
		'as' 	=> 'admin.products.getEditProduct',
		'uses' 	=> 'productController@getEditProduct'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.products.postEditProduct',
		'uses' 	=> 'productController@postEditProduct'
	]);

});	

Route::group(['prefix' => 'admin/category/'], function () {
	Route::get('add',
		['as' 	=> 'admin.category.getAddCategory',
		'uses' 	=> 'categoryController@getAddCategory'
	]);

	Route::get('list',
		['as' 	=> 'admin.category.getListCategory',
		'uses' 	=> 'categoryController@getListCategory'
	]);

	Route::post('postAdd',['as'=>'postAdd','uses'=>'categoryController@postAddCategory']);

	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteCategory',
		'uses' 	=> 'categoryController@getDeleteCategory'
	]);

	Route::get('edit/{id}', [
		'as' 	=> 'admin.category.getEditCategory',
		'uses' 	=> 'categoryController@getEditCategory'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.category.postEditCategory',
		'uses' 	=> 'categoryController@postEditCategory'
	]);

});	
