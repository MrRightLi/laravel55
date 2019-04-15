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

Route::get('/demo/user/renew', 'Demo\UserController@renew');
Route::get('/demo/user/renew2', 'Demo\UserController@renew2');
Route::get('/demo/user/test', 'Demo\UserController@test');


Route::get('/elk/demo/test1', 'ELK\DemoController@test1');