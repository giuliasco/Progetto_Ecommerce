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

Route::get('/checkout', function () {
    return view('checkout');
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/regular-page', function () {
    return view('regular-page');
});

Route::get('/Profile', function () {
    return view('Profile');
});
Route::get('/', 'HomeController@index');

Route::get('/data' , 'UsersController@edit')->name('users.edit');

Route::patch('/data' , 'UsersController@update')->name('users.update');

Route::get('/my_orders', 'OrdersController@show');


Route::post('/adress', 'UsersController@store')->name('users.store');
Route::get('/adress', 'UsersController@addresses');
Route::get('/shop/{sex}', 'productController@index');


Route::get('/shop', 'productController@collezione');

Route::get('/shop/single-product-details/{id}', 'singleproductController@dettagli');

Route::get('/shop/single-product-details/{id}/{size}/add', 'singleproductController@addtocart');

Route::get('/shop/single-product-details/{id}/remove', 'CartController@removefromcart');

Route::get('/shop/single-product-details/ciaone/{id}', 'singleproductController@addtocart');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/search', 'singleproductController@search')->name('search');

Route::get('/shop/{sex}/{name}', 'category@categoriaDonna');
