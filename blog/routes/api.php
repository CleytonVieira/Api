<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group(function(){
	Route::prefix('blog')->group(function(){

		Route::get('/', 'BlogController@index')-> name('index_blog');
		Route::get('/{id}', 'BlogController@show')->name('single_blog');

		Route::post('/', 'BlogController@store')-> name('store_blog');
		Route::put('/{id}', 'BlogController@update')-> name('update_blog');

		Route::delete('/{id}', 'BlogController@destroy')-> name('delete_blog');
	});
});
	