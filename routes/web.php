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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/quote', 'App\Http\Controllers\HomeController@quote')->name('quote');
Route::get('/thankyou', 'App\Http\Controllers\HomeController@thankyou')->name('thankyou');
Route::post('/quotesubmit', 'App\Http\Controllers\HomeController@quoteSubmit')->name('quotesubmit');

