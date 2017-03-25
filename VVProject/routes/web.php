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
    return view('index');
});
Route::post('/form', 'FormController@show');

Route::get('/recommendation', function () {
	return view('recommendation-list');
});

Route::get('/detail', function() {
	return view('smartphone-detail');
});

Route::get('/about', function() {
	return view('about');
});