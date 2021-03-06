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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();



Route::middleware('auth')->group(function(){
  Route::get('/tree', 'TreeController');
  Route::match(['get', 'post'], '/table', 'WorkersController@index')->name('table');
  Route::post('/search', 'WorkersController@search')->name('search');
  Route::resource('/workers', 'WorkersController', ['except' => 'index']);
  Route::post('/image/add', 'ImagesController@add')->name('image.add');
  Route::post('/image/change', 'ImagesController@change')->name('image.change');
});
