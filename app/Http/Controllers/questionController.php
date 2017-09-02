<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class questionController extends Controller
{
    public function ask(){
        public function ask(){
            $user = Auth::user();       //ログイン中のユーザーのデータ
            $userID = $user['U_id'];    //ユーザーID
            $noteID = Request::input(noteID);                    //ノートIDを入れる
            $content = Request::input(content);                   //質問内容を入れる

            DB::INSERT("insert into データベース () value (?,?,?)",[$userID,$noteID,$content]);

        }
}
