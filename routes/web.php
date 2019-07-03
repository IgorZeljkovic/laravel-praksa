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

Route::get('/get', function () {
    return 'Ovo je get';    
})->name('GET')->middleware('age');

Route::get('/simple', function () {
    $first_name = 'Igor';
    return view('simple', ['first_name' => $first_name]);
})->name('Simple');

Route::post('/post', function () {
    return 'Ovo je post';
})->name('POST');

Route::put('/put', function () {
    return 'Ovo je put.';
})->name('PUT');

Route::patch('/patch', function () {
    return 'Ovo je patch';
})->name('PATCH');

Route::delete('/delete', function () {
    return 'Ovo je delete';
})->name('DELETE');