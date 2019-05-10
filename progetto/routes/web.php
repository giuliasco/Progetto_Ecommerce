<?php
use App\Product;
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
/*
Route::get('/gg', function () {
    return view('index');
});
*/

Route::get('/', 'provaController@prova');


Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/regular-page', function () {
    return view('regular-page');
});

Route::get('/shop', 'productController@index');


Route::get('/single-product-details/{id}', 'singleproductController@details');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

