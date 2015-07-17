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

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function()
{
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');

    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');

    Route::get('activate/{token}', 'AuthController@getActivate');
});

Route::group(['namespace' => 'Auth', 'prefix' => 'password'], function()
{
    Route::get('email', 'PasswordController@getEmail');
    Route::post('email', 'PasswordController@postEmail');

    Route::get('reset/{token}', 'PasswordController@getReset');
    Route::post('reset/{token}', 'PasswordController@postReset');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Littera', 'prefix' => 'littera'], function()
{
    Route::get('/', [
        'as' => 'littera.dashboard.getIndex',
        'permission' => 'littera_dashboard_access',
        'uses' => 'DashboardController@getIndex',
    ]);
    Route::group(['prefix' => 'settings'], function()
    {
        Route::get('/', [
            'as' => 'littera.settings.getIndex',
            'permission' => 'littera_settings_access',
            'uses' => 'SettingsController@getIndex',
        ]);
    });
});

Route::get('/', 'PagesController@getWelcome');
