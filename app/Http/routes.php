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
    Route::get('logout', ['as' => 'auth.getLogout', 'before'=>'auth', 'uses'=>'AuthController@getLogout']);
    Route::group(['before'=>'guest'], function ()
    {
        Route::get('login', ['as' => 'auth.getLogin', 'uses' => 'AuthController@getLogin']);
        Route::post('login', ['as' => 'auth.postLogin', 'uses' => 'AuthController@postLogin']);
        Route::get('register', ['as' => 'auth.getRegister', 'uses' => 'AuthController@getRegister']);
        Route::post('register', ['as' => 'auth.postRegister', 'uses' => 'AuthController@postRegister']);
        Route::get('activate/{token}', 'AuthController@getActivate');
        Route::get('reminder', ['as' => 'auth.getReminder', 'uses' => 'AuthController@getReminder']);
        Route::post('reminder', ['as' => 'auth.postReminder', 'uses' => 'AuthController@postReminder']);
        Route::get('reset/{token}', 'AuthController@getReset');
        Route::post('reset/{token}', 'AuthController@postReset');
    });
});

Route::group(['before' => 'auth', 'prefix' => 'cms'], function()
{
    Route::get('/', ['as' => 'cms.Dashboard.getIndex', 'uses' => 'Cms\DashboardController@getIndex']);
});

Route::get('/', ['as' => 'page.getIndex', 'uses' => 'Site\PagesController@getIndex']);
