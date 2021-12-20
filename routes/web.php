<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view ('about');
});
Route::get('/students', 'StudentController@index');
Route::get('/students/{id}', 'StudentController@show');

Route::get('/courses', 'CourseController@index');
Route::get('/courses/{url}', 'CourseController@show');

Route::get('/contact', function () {
    return view ('contact');
});