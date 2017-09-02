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
      foreach ($note_list as $item)
          echo $item->text.'<br>';
      //TODO
      //Viewを返す
    }
    //指定のノートを得る
    public function GetNote($note_id){
      $note= Note::where('id',$note_id)->first();
          echo $note->text.'<br>';
      //TODO
      //Viewを返す
    }
}
