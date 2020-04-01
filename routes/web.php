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


Route::get('/home/memo', 'memocontroller@index');
Route::post('memo','memoController@post');
Route::get('memo/add','memoController@add');
Route::post('memo/add','memoController@create');
Route::get('memo/edit/{id}','memoController@edit');
Route::post('memo/edit/{id}','memoController@update');
Route::get('memo/del/{id}','memoController@del');
Route::post('memo/del/{id}','memoController@remove');






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');