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
    return view('welcome');
});

Route::get('/NoteEditing','NoteEditingController@PushEditedData');
Route::get('/timetables', 'timetableController@show');
Route::get('/questions', 'questionController@ask');
Route::get('/questions', 'questionController@answer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
