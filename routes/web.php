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


Route::get('/notes/{class_id}','NoteListShowController@GetAllNoteInClass');
Route::get('/notes/{class_id}/edit','NoteEditingController@show');
Route::post('/NoteEditing','NoteEditingController@OverwriteEditedNote');
Route::get('/timetable', 'timetableController@index');
// Route::get('/question', 'questionController@ask');
// Route::get('/question', 'questionController@answer');
Route::get('/question', 'questionController@showQuestionNotes');

Route::get('/home', 'HomeController@index')->name('home');


