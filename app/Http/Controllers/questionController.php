<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class questionController extends Controller
{
    public function ask()
    {
        $user = Auth::user();                                      //ログイン中のユーザーのデータ
        $user_id = $user['user_id'];                               //ユーザーID
        $note_id = Request::input(noteID);                    //ノートIDを入れる
        $context = Request::input(context);                   //質問内容を入れる

        //DBにuser_id note_id contextを格納
        DB::INSERT("insert into questions (note_id,user_id,context) value (?,?,?)", [$user_id, $note_id, $context]);

        return ;
    }

   
}
