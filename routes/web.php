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

Route::get('/get', 'HomeController@get')->name('GET')->middleware('age');

Route::get('/simple', 'HomeController@simple')->name('Simple');

Route::post('/post', 'HomeController@post')->name('POST');

Route::put('/put', 'HomeController@put')->name('PUT');

Route::patch('/patch', 'HomeController@patch')->name('PATCH');

Route::delete('/delete', 'HomeController@delete')->name('DELETE');

Route::resource('/resource', 'ResourceController');