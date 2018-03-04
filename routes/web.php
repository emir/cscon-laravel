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
    return view('welcome');
});

Auth::routes();

Route::get('/hello', 'TestController@index');

Route::get('/giris-yap', function() {
    return view('stack.login');
});

Route::get('/kayit-ol', function() {
    return view('stack.signup');
});

Route::post('/kayit-ol', 'TestController@hebele');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/haberler', 'TestController@haberler');

Route::get('/haber/{id}', 'TestController@haber');

Route::post('/yorumlar', 'CommentsController@store');