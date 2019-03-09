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

Route::get('/admin/user/renew', 'Admin\UserController@renew');
Route::get('/admin/user/renew2', 'Admin\UserController@renew2');
Route::get('/admin/user/test', 'Admin\UserController@test');


Route::get('/elk/demo/test1', 'ELK\DemoController@test1');