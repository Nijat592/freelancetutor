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

Route::get('/', 'TestController@bosluq');

Route::get('/idareci', 'TestController@idareci');

Route::get('/telebe', 'TestController@telebe');

Route::get('/muellim', 'TestController@muellim');

Route::get('/siyahi', 'TestController@siyahi');

Route::get('/kateqoriya', 'TestController@kateqoriya');