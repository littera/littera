<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$routes = [
	'auth',
	'site',
	'cms',
];

foreach ($routes as $route) {
	$file = app_path().'/routes/'.$route.'.php';
	if (file_exists($file)) include $file;
}


Route::when('*', 'csrf', array('post'));