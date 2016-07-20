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
Route::get('/', function(){
	return view('front.index');
});

Route::get('/results', function(){
	return view('front.results');
});

Route::get('/details', function(){
	return view('front.details');
});

Route::get('/register_page', function(){
	return view('front.register');
});

Route::get('/profile', function(){
	return view('front.profile');
});

Route::get('/profile/education/create', function(){
	return view('front.edit_profile.create_education');
});

Route::get('/profile/experience/create', function(){
	return view('front.edit_profile.create_experience');
});

Route::get('/profile/subject/create', function(){
	return view('front.edit_profile.create_subject');
});

Route::get('/education', function() {
	return view('front.profile.education');
});

Route::get('/experience', function() {
	return view('front.profile.experience');
});

Route::get('/subject', function() {
	return view('front.profile.subject');
});


Route::get('/changepassword', function() {
	return view('front.profile.changepassword');
});
Route::post('/changepassword','Auth\PasswordController@changepassword');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::post('/resetPassword', 'HomeController@changepassword');