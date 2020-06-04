<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Institutions routes
Route::get('/institutions','InstitutionController@index');
Route::get('/institutions/create','InstitutionController@create');
Route::post('/institutions','InstitutionController@store');
Route::get('/institutions/{institution}','InstitutionController@edit');
Route::patch('/institutions/{institution}','InstitutionController@update');
Route::delete('/institutions/{institution}','InstitutionController@destroy');
Route::get('/institutions/{institution}/students','InstitutionController@studentsShow');
Route::get('/institutions/{institution}/courses','InstitutionController@coursesShow');

//Students routes
Route::get('/students','StudentController@index');
Route::get('/students/create','StudentController@create');
Route::post('/students','StudentController@store');
Route::get('/students/{student}','StudentController@edit');
Route::patch('/students/{student}','StudentController@update');
Route::delete('/students/{student}','StudentController@destroy');

//Courses routes
Route::get('/courses','CourseController@index');
Route::get('/courses/create','CourseController@create');
Route::post('/courses','CourseController@store');
Route::get('/courses/{course}','CourseController@edit');
Route::patch('/courses/{course}','CourseController@update');
Route::delete('/courses/{course}','CourseController@destroy');
Route::get('/courses/{course}/students','CourseController@studentsShow');


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
