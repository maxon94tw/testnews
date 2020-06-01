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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

//Adminer for MySQL
Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index');

//Admin routes
Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::resource('news', 'NewsController');

    Route::get('/admin/news', 'NewsController@index');

});




