<?php
@session_start();
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

Route::get('/',"HomeController@index")->name("home");
Route::get('/terminos-condiciones',"HomeController@terminos")->name("home");
Route::get('/faq',"HomeController@faq")->name("home");

Route::get('/catalog','CatalogController@index')->name("Catalog");

Route::get('/join',"HomeController@join")->name("join");
Route::get('/recover',"HomeController@recover")->name("join");

Route::get('/profile','ProfileController@index')->name("profile");

Route::get('/cart','CartController@index')->name("cart");

Route::get('/resume/{id}','OrdersController@show')->name("cart");

Route::get('/validateUser/{hash}','API\RegisterController@validateUser');

// For SinglePages
Route::get('/culture',"SinglePageController@culture")->name("culture");
Route::get('/sucursal/{id?}',"SinglePageController@sucursal")->name("sucursal");
Route::get('/contact',"SinglePageController@contact")->name("contact");

// Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
