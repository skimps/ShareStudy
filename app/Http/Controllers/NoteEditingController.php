<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use DB;

//ノート編集ページのコントローラ
class NoteEditingController extends Controller
{   
    
    
    //ノートの存在確認
    private function IsExsistNote($note_id){
        return Note::where('id',$note_id)->count()!=0;
    }

    public function show($class_id){
          $note_list= Note::where('class_id',$class_id)->get();
        //   foreach ($note_list as $item)
        //       echo $item->text.'<br>';
        //TODO
        //Viewを返す
        return view('note/edit')->with('note_list', $note_list);
    }
    
    //主キーを指定してNoteを得る
    public function GetNote($note_id){
        return Note::where('id',$note_id)->first();
    }
    
    //主キーを指定してNoteを削除する
    public function DeleteNote($note_id){
        if($this->IsExsistNote($note_id)==false)
            throw new Exception("id={$note_id}の行は存在しません!!error!!!<br>");
        Note::where('id',$note_id)->delete();
        
        //TODO
        //Viewを返す
    }
    
    //編集したノートをデータベースへ上書き保存する
    public function OverwriteEditedNote(){
        $note_id = $_POST["note_id"];
        $note_str = $_POST["note_str"];
        $class_id = $_POST["class_id"];
       //存在しないN_idなら例外を吐く
       if($this->IsExsistNote($note_id)==false)
           throw new Exception("id={$note_id}の行は存在しません!!error!!!<br>");
           
       //ノートを上書き
       Note::where('id',$note_id)->update(['text'=>$note_str]);   
       
        //データ再取得
       $note_list= Note::where('class_id',$class_id)->get();
       //TODO
       //ここでViewを返す予定
       return view('note/index')->with('note_list', $note_list);
    }
    
        
    //編集したノートをデータベースへ新規保存する
    public function NewEditedNote($class_id=1,$note_str='foobee'){
            
       //すでに存在しているキーを生成しようとしたら例外を吐く
       if($this->IsExsistNote($note_id))
           throw new Exception("id={$note_id}すでに存在しているノートを作成しようとしましたerror!!!<br>");
       
       //ノート生成
       Note::create(['class_id'=>$class_id,'text'=>$note_str]);
       
       //TODO
       //ここでViewを返す予定
    }
}
