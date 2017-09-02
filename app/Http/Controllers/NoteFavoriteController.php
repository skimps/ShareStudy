<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Note;
use DB;
class NoteFavoriteController extends Controller
{
    //ユーザーがふぁぼしたノート一覧の取得する
    public function GetFavoritedNotes($user_id){
        Favorite::where('user_id',$user_id)->get();
        //TODO
        //viewを返す
    }
    
    //ふぁぼる
    public function SetFavoritedNote($user_id,$note_id){
        //例外判定
        if(Note::where('note_id',$note_id)->count()==0)
            throw new Exception("id={$note_id}の行は存在しません!!error!!!<br>");
        if(Favorite::where('note_id',$note_id)->where('user_id',$user_id)->count()!=0)
            throw new Exception("とりあえず例外吐いておく");
        
        //ふぁぼリストに追加
        Favorite::create(['note_id'=>$note_id,'user_id'=>$user_id]);
        
        //TODO
        //viewを返す
    }
    
        //ふぁぼる解除
    public function UnSetFavoritedNote($favorite_id){
        //例外判定
        if(Favorite::where('id',$favorite_id)->count()==0)
            throw new Exception("id={$favorite_id}の行は存在しません!!error!!!<br>");
        
        //ふぁぼリストから削除
        Favorite::where('id',$favorite_id)->delete();
        
        //TODO
        //viewを返す
    }
}
