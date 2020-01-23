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
    return view('home');
})->name("home");

Route::get('/catalog', function(){
	return view('catalog');
});

Route::get('/join', function(){
	return view('register');
});

Route::get('/profile', function(){
	return view('profile');
});

Route::get('/cart', function(){
	return view('cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
