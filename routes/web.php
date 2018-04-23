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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/category', 'CategoryController@index')->name('addCategory');
Route::post('/add/category', 'CategoryController@store')->name('handleSubmit');

Route::get('/category/{id}', 'CategoryController@showFilmsByCategory')->name('showFilmsByCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'HomeController@adminHome')->name('adminHome');
Route::get('/user/home', 'HomeController@userHome')->name('userHome');
Route::get('/showUsers', 'UserController@show')->name('showUsers');
Route::get('/deleteUser/{id}', 'UserController@delete')->name('deleteUser');