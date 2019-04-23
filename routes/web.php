<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'home','middleware' => 'auth:web'], function () {
    Route::get('/', 'HomeController@index');
});


Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {//, 'namespace' => 'Admin' ,   'as' => 'admin::'
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'IndexController@index');
    });
});