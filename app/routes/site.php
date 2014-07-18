<?php

Route::get('/', ['as' => 'page_index', 'uses' => 'Site\PagesController@getIndex']);