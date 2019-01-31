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

Route::get('/','IndexController@home')->name('index');

Route::get('/sign-up','IndexController@sign')->name('register');

Route::get('/login','IndexController@login')->name('login');

Route::get('/forget-passwords', 'forgotPasswordController@showLinkRequestForm');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/sign-up', 'Auth\RegisterController@register');

Route::post('/login', 'Auth\LoginController@login');

Route::post('/forget-passwords', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::post('/logout','Auth\LoginController@logout')->name('logout');



