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
    return view('user.index');
});
Route::post('/user/certificate', 'WelcomeController@search')->name('user.search');
Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::resource('/certificates', 'CertificateController');
	Route::get('/', 'HomeController@dashboard')->name('admin.index');
});