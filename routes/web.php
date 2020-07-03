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

Route::get('/category','CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category','CategoryController@store');
Route::get('/category/{row}/edit','CategoryController@edit');
Route::patch('/category/{row}','CategoryController@update');
Route::delete('/category/{id}','CategoryController@destroy');

Route::get('/post','PostController@index');
Route::get('/post/create','PostController@create');
Route::post('/post','PostController@store');
Route::get('/post/{row}/edit','PostController@edit');
Route::patch('/post/{row}','PostController@update');
Route::delete('/post/{id}','PostController@destroy');

Route::get('/photo','PhotoController@index');
Route::get('/photo/create','PhotoController@create');
Route::post('/photo','PhotoController@store');
Route::get('/photo/{row}/edit','PhotoController@edit');
Route::patch('/photo/{row}','PhotoController@update');
Route::delete('/photo/{id}','PhotoController@destroy');

Route::get('/album','AlbumController@index');
Route::get('/album/create','AlbumController@create');
Route::post('/album','AlbumController@store');
Route::get('/album/{row}/edit','AlbumController@edit');
Route::patch('/album/{row}','AlbumController@update');
Route::delete('/album/{id}','AlbumController@destroy');