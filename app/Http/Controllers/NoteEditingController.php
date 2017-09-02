<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use DB;

//ノート編集ページのコントローラ
class NoteEditingController extends Controller
{   
    
    public function GetAllNote(){
        return Note::all();
    }
    //編集したノートを使ってデータベースへプッシュする
    public function PushEditedData($note_id=127,$class_id=1,$note_str='foobar'){
        //note_idがnullならば新規に行を追加する
        if($note_id===NULL){
              echo("新規に行を挿入します<br>");
              Note::create(['C_id'=>$class_id,'text'=>$note_str]);
              return;
        }
            
       $count=Note::where('N_id',$note_id)->count();
       if($count<=0){
           echo("N_id={$note_id}の行は存在しません!!error!!!<br>");
           return;
       }
       else{
            echo("N_id={$note_id}の行が存在するので上書きします<br>");
            Note::where('N_id',$note_id)->update(['text'=>$note_str]);
       }
       foreach($this->GetAllNote() as $text){
           echo $text.'<br>';
       }
       
    }
}
