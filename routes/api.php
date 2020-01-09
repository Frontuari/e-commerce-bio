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

Route::middleware('auth:api')->group( function () {

});

//CATEGORIES
Route::resource('categories', 'API\CategoryController');

//PRODUCTS
Route::resource('products', 'API\ProductController');
Route::get('products/search/{name}','API\ProductController@search')->name("search_like");
Route::get('products/most/viewed','API\ProductController@most_viewed')->name("most_viewed");
Route::get('products/most/recent','API\ProductController@most_recent')->name("most_recent");
Route::get('products/most/sold','API\ProductController@most_sold')->name("most_sold");
Route::get('products/best/price','API\ProductController@best_price')->name("best_price");

//BRANDS
Route::resource('brands', 'API\BrandController');

//PACKAGES
Route::resource('packages', 'API\ProductPackageController');//PACKAGE

//SETINGS
Route::get('settings','API\SettingController@all')->name('settings');

//PAYMENT_METHODS
Route::resource('payment_methods', 'API\PaymentMethodsController');

//FAVORITE PRODUCTS
Route::resource('favorite', 'API\FavoriteController');