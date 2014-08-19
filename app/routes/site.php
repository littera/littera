<?php

Route::get('/', ['as' => 'page.getIndex', 'uses' => 'Site\PagesController@getIndex']);