<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use DB;

//ノート編集ページのコントローラ
class NoteEditingController extends Controller
{   
    
    //全てのNoteモデルを得る
    public function GetAllNote(){
        return Note::all();
    }
    
    //主キーを指定してNoteを得る
    public function GetNote($note_id,$class_id){
        return Note::where('id',$note_id)->first();
    }
    
    //主キーを指定してNoteを削除する
    public function DeleteNote($note_id,$class_id){
        Note::where('id',$note_id)->delete();
    }
    
    //編集したノートをデータベースへプッシュする
    //$note_idにNULLを指定で新規行作成
    public function PushEditedData($note_id=NULL,$class_id=1,$note_str='foobee'){

        //note_idがnullならば新規に行を追加する
        if($note_id===NULL){
              Note::create(['class_id'=>$class_id,'text'=>$note_str]);
              return;
        }
            
       //存在しないN_idなら例外を吐く
       if(Note::where('id',$note_id)->count()<=0)
           throw new Exception("id={$note_id}の行は存在しません!!error!!!<br>");
           
       //データベースのノートを更新する
       Note::where('id',$note_id)->update(['text'=>$note_str]);    
    }
}
