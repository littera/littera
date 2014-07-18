<?php

Route::group(['before' => 'auth', 'prefix' => 'cms'], function()
{
	Route::get('/', 'Cms\DashboardController@getIndex');
});