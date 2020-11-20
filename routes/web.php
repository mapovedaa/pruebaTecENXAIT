<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'RefflesController@index');

Route::get('/sorteo', 'RefflesController@index')->name('reffles.index');
Route::get('/sorteo/create', 'RefflesController@create')->name('reffles.create');
Route::post('/users/create','UsersController@store')->name('users.create');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
