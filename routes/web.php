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

//LogViewer routes
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//Main page route
Route::get('/', function () {
    return view('welcome');
});

// Authorization routes
Auth::routes();

//Posts routes
Route::resource('posts', 'PostController');


//Home route
Route::get('/home', 'HomeController@index')->name('home');
