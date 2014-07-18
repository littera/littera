<?php

Route::group(['prefix'=>'auth'], function()
{
	Route::get('logout', ['before'=>'auth','uses'=>'AuthController@getLogout']);
	Route::group(['before'=>'guest'], function ()
	{
		Route::get('login', ['as' => 'auth.getLogin', 'uses' => 'AuthController@getLogin']);
		Route::post('login', ['as' => 'auth.postLogin', 'uses' => 'AuthController@postLogin']);
		Route::get('register', 'AuthController@getRegister');
		Route::post('register', 'AuthController@postRegister');
		Route::get('activate/{token}', 'AuthController@getActivate');
		Route::get('reminder', 'AuthController@getReminder');
		Route::post('reminder', 'AuthController@postReminder');
		Route::get('reset/{token}', 'AuthController@getReset');
		Route::post('reset/{token}', 'AuthController@postReset');
	});
});