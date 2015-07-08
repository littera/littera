<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix'=>'auth'], function()
{
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');
    Route::get('activate/{token}', 'Auth\AuthController@getActivate');
    Route::get('reset', 'AuthController@getReminder');
    Route::post('reset', 'AuthController@postReminder');
    Route::get('reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('reset/{token}', 'Auth\PasswordController@postReset');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['before' => 'auth', 'prefix' => 'admin'], function()
{
    Route::get('/', [
        'as' => 'admin.dashboard.getIndex',
        'uses' => 'Admin\DashboardController@getIndex'
    ]);
});

Route::get('/', 'PagesController@getWelcome');
