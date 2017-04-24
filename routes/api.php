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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('sellers','SellerController@index');
Route::get('sellers/{id}','SellerController@show');
Route::post('sellers','SellerController@create');
Route::put('sellers/{id}','SellerController@update');
Route::patch('sellers/{id}','SellerController@edit');
Route::delete('sellers/{id}','SellerController@destroy');

Route::post('sellers/{seller_id}/products/{product_id}','SellerController@addSale');


Route::get('providers','ProviderController@index');
Route::get('providers/{id}','ProviderController@show');
Route::post('providers','ProviderController@create');
Route::put('providers/{id}','ProviderController@update');
Route::patch('providers/{id}','ProviderController@edit');
Route::delete('providers/{id}','ProviderController@destroy');


Route::get('products','ProductController@index');
Route::get('products/{id}','ProductController@show');
Route::post('products','ProductController@create');
Route::put('products/{id}','ProductController@update');
Route::patch('products/{id}','ProductController@edit');
Route::delete('products/{id}','ProductController@destroy');

Route::get('categories/{id}/products','ProductController@showByCategory');
Route::get('sellers/{id}/products','ProductController@showBySale');


Route::get('categories','CategoryController@index');
Route::get('categories/{id}','CategoryController@show');
Route::post('categories','CategoryController@create');
Route::put('categories/{id}','CategoryController@update');
Route::patch('categories/{id}','CategoryController@edit');
Route::delete('categories/{id}','CategoryController@destroy');
