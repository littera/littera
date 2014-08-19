<?php

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