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

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/books', function () {
    return view('books');
});
Route::get('/watch/{id}', 'VideoController@index');

Route::get('/books', 'BookController@index');

Route::get('/payment', 'PaymentController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
