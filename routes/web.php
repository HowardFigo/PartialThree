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
    return view('start');
});

Route::get('/professional', 'professionalController@professional')->name('professional');

Route::get('/reviewRating', 'professionalController@reviewRating')->name('rating');
Route::get('/reviewComment', 'professionalController@reviewComment')->name('comment');
