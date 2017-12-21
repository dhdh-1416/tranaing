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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/contact', function () {
  // return view('contact');
//});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/index_course', 'courseController@index_course');
Route::get('/add_course', 'courseController@add_course');
Route::get('/delete_course', 'courseController@delete_course');
Route::get('/edit_course', 'courseController@edit_course');
Route::get('/index_tranaing', 'tranaingcontroller@index_tranaing');
Route::get('/add_tranaing', 'tranaingcontroller@add_tranaing');
Route::get('/delete_tranaing', 'tranaingcontroller@delete_tranaing');
Route::get('/edit_tranaing', 'tranaingcontroller@edit_tranaing');

