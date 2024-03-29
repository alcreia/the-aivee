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

Route::get('/', 'HomeController@index');

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/watch/{id}', 'VideoController@index');

Route::get('/books/{id}', 'BookController@index');

Route::get('/payment/{id}', 'PaymentController@index');

Auth::routes();