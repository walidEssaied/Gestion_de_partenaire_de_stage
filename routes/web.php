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

Route::get('/index', function () {
    return view('welcome');
});
 
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'AppController@home')->name('home');
    Route::resource('/etudiant', 'EtudiantController');
});