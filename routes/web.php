<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('welcome');});
Route::get('/home', 'usercontroller@index');
Route::post('hello','userController@post');
Route::get('hello/add','userController@add');
Route::post('hello/add','userController@create');
Route::get('hello/edit/{id}','userController@edit');
Route::post('hello/edit/{id}','userController@update');
Route::get('hello/del/{id}','userController@del');
Route::post('hello/del/{id}','userController@remove');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');