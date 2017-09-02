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

use Illuminate\Http\Request;


Auth::routes();

Route::get('/', 'TopController@index');


Route::get('/notes/{class_id}','NoteListShowController@GetAllNoteInClass');
Route::get('/notes/{class_id}/edit','NoteEditingController@show');
Route::post('/NoteEditing','NoteEditingController@OverwriteEditedNote');
Route::get('/timetable', 'timetableController@index');
// Route::get('/question', 'questionController@ask');
// Route::get('/question', 'questionController@answer');
Route::get('/question', 'questionController@showQuestionNotes');


Route::get('/NoteListShow/{class_id}','NoteListShowController@GetAllNoteInClass');
Route::get('/NoteEditing','NoteEditingController@PushEditedData');
Route::get('/timetable', 'timetableController@index');


Route::get('subjectnote', function (Request $request) {
    // $name = $request->get("name");
    // //whereでお客さんが欲しい教科のコマを取得
    // $comas = App\Coma::Where("subject_name",$name)
    // ->get();
    // //lessonsの中にcomas達と合ったlessonを入れる
    // $lessons = $comas->map(function($coma){
    //   return $coma->lessons;
    //  //flattenで凝縮されたものの中に凝縮されたものを解体する
    // })->flatten();
    // $notes = $lessons->map(function($lesson){
    //  //notesじゃないのはer図が一対一だから「s」がつかない
    //   return $lesson->note;
    // });
    $note = new stdClass();
    $note->class_id = "辻村先生のありがたい授業";
    $note->text = "何もわかりません";

    $notes = [
      $note,$note
    ];
    return view('subject_note_list',[
      'notes' => $notes,
      'subject_name' => 'ネットワーク'
    ]);
});

Auth::routes();

Route::get('/subject_note_list', function(){
  return view('subject_note_list');
 });

