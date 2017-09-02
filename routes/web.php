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

Auth::routes();

Route::get('/', 'TopController@index');


Route::get('/NoteListShow/{class_id}','NoteListShowController@GetAllNoteInClass');
Route::get('/NoteEditing','NoteEditingController@PushEditedData');
Route::get('/timetable', 'timetableController@index');
Route::get('/question', 'questionsController@ask');
Route::get('/question', 'questionsController@answer');
Route::get('/question', 'questionsController@showQuestionNotes');

Route::get('/home', 'HomeController@index')->name('home');


