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

Route::get('/', function()
{
	$env = getenv("SERVER_INSTANCE_ID");
	if( empty($env) )
		$env = "None";

	return View::make('hello')->with("SERVER_INSTANCE_ID", $env);
});
