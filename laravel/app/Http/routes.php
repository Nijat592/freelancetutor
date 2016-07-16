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
Route::resource('admin/subjects', 'Admin\SubjectsController');
Route::get('/', 'TestController@index');
Route::get('/result', 'TestController@result');
Route::get('/detalis', 'TestController@detalis');
Route::get('/profil', 'TestController@profil');

// Route::get('/profile', 'TestController@profile');
