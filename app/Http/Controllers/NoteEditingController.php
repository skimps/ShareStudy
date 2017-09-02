<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

//ノート編集ページのコントローラ
class NoteEditingController extends Controller
{
    //編集したノートを使ってデータベースへプッシュする
    public function PushEditedData($note_id=126,$class_id=1,$note_str='hogehoge2'){
        
        //note_idがnullならば新規に行を追加する
        if($note_id===NULL){
              echo("新規に行を挿入します<br>");
              DB::table('note')->insert(['C_id'=>$class_id,'text'=>$note_str]);
              return;
        }
            
       $count=count(DB::table('note')->where('N_id',$note_id)->get());
       if($count<=0){
           echo("N_id={$note_id}の行は存在しません!!error!!!<br>");
           return;
       }
       else{
            echo("N_id={$note_id}の行が存在するので上書きします<br>");
            DB::table('note')->where('N_id',$note_id)->update(['text'=>$note_str]);
       }
        echo($note_str);
    }
}
