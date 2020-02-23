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

Route::get('/catalog','CatalogController@index')->name("Catalog");

Route::get('/join', function(){
	return view('register');
});

Route::get('/profile', function() {
	if(!isset($_SESSION["usuario"]) && empty($_SESSION["usuario"]) && empty($_SESSION["usuario"]["id"])){
		return redirect()->action('HomeController@index');
	}else{
		return view('profile');
	}
	
});


Route::get('/cart','CartController@index')->name("cart");


Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
