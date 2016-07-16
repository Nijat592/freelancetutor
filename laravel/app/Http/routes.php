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


Route::resource('admin/categories', 'Admin\SubjectCategoriesController');
Route::resource('admin/teachers', 'Admin\TeachersController');
/*Route::get('/', 'TestController@index');
Route::get('/result', 'TestController@result');
Route::get('/detalis', 'TestController@detalis');*/

Route::get('/', function() {
	return view('front.index');
});

Route::get('/detail', function() {
	return view('front.detalis');
});

Route::get('/result', function() {
	return view('front.result');
});



Route::get('/education', function() {
	return view('education');
});

Route::get('/experience', function() {
	return view('experience');
});

Route::get('/subject', function() {
	return view('subject');
});

// Route::get('/profile', 'TestController@profile');
