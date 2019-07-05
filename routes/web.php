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

Route::get('/get', 'HomelessController@get')->name('GET')->middleware('age');

Route::get('/simple', 'HomelessController@simple')->name('simple');

Route::post('/post', 'HomelessController@post')->name('POST');

Route::put('/put', 'HomelessController@put')->name('PUT');

Route::patch('/patch', 'HomelessController@patch')->name('PATCH');

Route::delete('/delete', 'HomelessController@delete')->name('DELETE');

Route::resource('/resource', 'ResourceController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
