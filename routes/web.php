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
    //$user = Auth::loginUsingId(1);
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/controller', 'Home\\IndexController@index');

Route::get('/controller/view', 'Home\\IndexController@view')->middleware('auth');


Route::get('/home', 'Home\\IndexController@index');







Auth::routes();

Route::get('/home', 'HomeController@index');
