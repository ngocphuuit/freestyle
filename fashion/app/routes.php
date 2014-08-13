<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'uses'=>'ProductController@index'
));

Route::get('nopu',function(){
	return View::make('test');
});

Route::get('product-detail',function(){
	return View::make('product.product_detail');
});

Route::get('admin',function(){
	return View::make('admin.index');
});

Route::get('admin/charts',function(){
	return View::make('admin.charts');
});

Route::get('admin/tables',function(){
	return View::make('admin.tables');
});

Route::get('admin/forms',function(){
	return View::make('admin.forms');
});

Route::get('admin/blank-page',function(){
	return View::make('admin.plank-page');
});

Route::get('admin/bootstrap-elements',function(){
	return View::make('admin.bootstrap-elements');
});

Route::get('admin/bootstrap-grid',function(){
	return View::make('admin.bootstrap-grid');
});