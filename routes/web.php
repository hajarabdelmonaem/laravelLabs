<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mobile','User_mobileController');

Route::get('/mobile','User_mobileController@create');

Route::resource('address','User_addressController');

Route::get('/address','User_addressController@create');

Route::resource('contact','User_contactController');

Route::get('/contact','User_contactController@create');


