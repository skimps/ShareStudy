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
    public function GetNote($note_id){
        return Note::where('id',$note_id)->first();
    }
    
    //主キーを指定してNoteを削除する
    public function DeleteNote($note_id){
        Note::where('id',$note_id)->delete();
    }
    
    //編集したノートをデータベースへ上書き保存する
    public function OverwriteEditedNote($note_id=1,$note_str='foobee'){            
       //存在しないN_idなら例外を吐く
       if(Note::where('id',$note_id)->count()<=0)
           throw new Exception("id={$note_id}の行は存在しません!!error!!!<br>");
           
       //ノートを上書き
       Note::where('id',$note_id)->update(['text'=>$note_str]);    
    }
    
        
    //編集したノートをデータベースへ新規保存する
    public function NewEditedNote($class_id=1,$note_str='foobee'){
            
       //すでに存在しているキーを生成しようとしたら例外を吐く
       if(Note::where('id',$note_id)->count()!=0)
           throw new Exception("id={$note_id}すでに存在しているノートを作成しようとしましたerror!!!<br>");
       
       //ノート生成
       Note::create(['class_id'=>$class_id,'text'=>$note_str]);
    }
}
