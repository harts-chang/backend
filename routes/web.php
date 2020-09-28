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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index');
Route::get('/1', 'FrontController@news');
Route::get('/2', 'FrontController@news_info');
Route::get('/3', 'FrontController@contact_us');
// Route::get('/4', 'FrontController@template');