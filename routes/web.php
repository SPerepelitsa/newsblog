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
if (!App::environment('prod')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

//Main page route
Route::get('/', function () {
    return view('welcome');
});

// Authorization routes
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//News route (main page info)
Route::get('/', 'NewsController@index')->name('main');
Route::get('news/{post}', 'NewsController@single')->name('single')->middleware('auth');

//Posts routes
Route::group(['prefix' => 'admin'], function () {
    Route::resource('posts', 'PostController')->middleware('admin.login');
});

//Home route
Route::get('/home', 'HomeController@index')->name('home');
