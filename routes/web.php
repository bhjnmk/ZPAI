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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[
    'uses' => 'SitesController@index',
    'as' => 'sites.index'
]);;

Route::get('/category',[
    'uses' => 'SitesController@category',
    'as' => 'admin.category'
]);

Route::get('/admin',[
    'uses' => 'AdminController@admin',
    'as' => 'admin.admin'
]);

Route::post('/saveProd', [
    'uses' => 'AdminController@saveProd',
    'as' => 'admin.saveProd'
]);

Route::post('/saveCat', [
    'uses' => 'AdminController@saveCat',
    'as' => 'admin.saveCat'
]);

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'auth.logout'
]);

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

