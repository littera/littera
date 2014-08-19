<?php

Route::group(['before' => 'auth', 'prefix' => 'cms'], function()
{
	Route::get('/', ['as' => 'cms.Dashboard.getIndex', 'uses' => 'Cms\DashboardController@getIndex']);
});