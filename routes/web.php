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

Route::get('/', function () {return view('home.start'); });
Route::get('/onas', function () {return view('home.onas'); });
Route::get('/obazie', function () {return view('home.obazie'); });
Route::get('/dodajfirme', function () {return view('home.dodajfirme'); });
Route::post('/wyslijzgloszenie', 'ContactController@send');


Auth::routes();

Route::get('/start', 'HomeController@index')->name('home');

