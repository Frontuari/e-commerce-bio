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
if(isset($_GET['store'])){
    $_SESSION['stores_id']=$_GET['store'];
}else{
    $_SESSION['stores_id']=1;
}
Route::get('/',"HomeController@index")->name("home");
Route::get('/international-payment-button/{nb}/{ap}/{ci}/{nai}/{mt}/{em}/{from?}','HomeController@InternationalPaymentButton')->name('InternationalPaymentButton');
Route::get('/123pago/despedida','HomeController@url_despedida');

Route::get('/123pago/getdataresponse/{orderno?}','HomeController@getdataresponse');

Route::post('/123pago/retorno','HomeController@url_retorno');

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
    Route::get('masivo', ['uses' => 'Subscriptions@home', 'as' => 'voyager.masivo']);
    Route::get('reportes', ['uses' => 'Reportes@home', 'as' => 'voyager.reportes']);

    Route::get('kpis/transactions-for-period','KpisController@TransactionsForPeriod');
    Route::get('kpis/sales-for-period','KpisController@SalesForPeriod');
    Route::get('kpis/sales-units-for-period','KpisController@SalesUnitsForPeriod');
    
    Route::post('kpis/getData', 'KpisController@getData')->name('get_data');
});
