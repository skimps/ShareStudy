<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use DB;

class NoteListShowController extends Controller
{
    //クラスの全てのNoteリストを得る
    public function GetAllNoteInClass($class_id){
      $note_list= Note::where('class_id',$class_id)->get();
      //TODO
      //Viewを返す
    }
}
