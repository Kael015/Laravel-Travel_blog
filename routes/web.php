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

Route::get('/', 'indexController@index');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact/store', 'PagesController@store');
Auth::routes();
Route::get('/blog', 'BlogController@blog');
Route::post('/blog/store', 'BlogController@store');
Route::get('/artikel/{id}', 'BlogController@isi');
Route::get('/index', 'adminController@index');
Route::get('/user', 'adminController@user');
Route::get('/message', 'adminController@message');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
