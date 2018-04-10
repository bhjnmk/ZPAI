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

Route::get('/view',[
    'uses' => 'AdminController@view',
    'as' => 'admin.view'
]);

Route::get('/about',[
    'uses' => 'SitesController@about',
    'as' => 'sites.about'
]);

Route::get('/addProd','AdminController@addProd');

Route::get('/addCat','AdminController@addCat');

Route::post('/save', [
    'uses' => 'AdminController@saveProd',
    'as' => 'admin.saveProd'
]);

Route::post('/savecat', [
    'uses' => 'AdminController@saveCat',
    'as' => 'admin.saveCat'
]);


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

