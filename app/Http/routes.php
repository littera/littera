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

Route::group(['before' => 'auth', 'prefix' => 'cms'], function()
{
    Route::get('/', ['as' => 'cms.Dashboard.getIndex', 'uses' => 'Cms\DashboardController@getIndex']);
});

Route::get('{slug?}', 'PagesController@getPage');
