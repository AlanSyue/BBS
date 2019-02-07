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

// 註冊功能
Route::get('/sign-up','IndexController@sign')->name('register');

Route::post('/sign-up', 'Auth\RegisterController@register');

// 登入功能
Route::get('/login','IndexController@login')->name('login');

Route::post('/login', 'Auth\LoginController@login');

// 忘記密碼,寄信
Route::get('/forget-passwords', 'Auth\forgotPasswordController@showLinkRequestForm')->name('password.forget');

Route::post('/forget-passwords', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// 修改密碼
Route::get('/reset-passwords/{token}/{email}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');

Route::post('/reset-passwords/{token}/{email}', 'Auth\ResetPasswordController@reset');

// 登出
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/logout','Auth\LoginController@logout')->name('logout');

// 發文
Route::get('/ask', 'IndexController@ask');

Route::post('/ask', 'IndexController@askpost');

// 會員中心
Route::get('/member-index', 'IndexController@member');

// 文章內頁

Route::get('/post/{pid}', 'IndexController@postID');

Route::post('/post/{pid}', 'IndexController@reply');





