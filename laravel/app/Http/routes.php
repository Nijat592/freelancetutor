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
Route::get('/', 'TestController@index');
Route::get('/result', 'TestController@result');
Route::get('/detalis', 'TestController@detalis');
Route::get('/register', 'RegisterController@index');

Route::get('/', 'PagesController@index');
Route::get('/formEducation', 'FormsController@education');
Route::get('/formExperience', 'FormsController@experience');
Route::get('/formSubject', 'FormsController@subject');


// Route::get('/profile', 'TestController@profile');
