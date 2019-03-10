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
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/regular-page', function () {
    return view('regular-page');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/single-product-details', function () {
    return view('single-product-details');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
