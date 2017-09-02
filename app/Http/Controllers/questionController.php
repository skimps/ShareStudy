<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class questionController extends Controller
{
    public function ask()
    {
        $user = Auth::user();       //ログイン中のユーザーのデータ
        $user_id = $user['user_id'];
        $note_id = Request::input(note_id);
        $context = Request::input(context);

        //DBに user_id note_id contextを格納
        DB::INSERT("insert into questions (note_id,user_id,context) value (?,?,?)", [ $note_id,$user_id,$context]);

        return view('/');
    }
    public function answer()
    {
        $user = Auth::user();                                      //ログイン中のユーザーのデータ
        $user_id = $user['user_id'];                               //ユーザーID
        $question_id = Request::input(question_id);
        $content = Request::input(content);

        //DBに question_id user_id content を格納
        DB::INSERT("insert into answers (question_id,user_id,content) value (?,?,?)", [$question_id,$user_id,$content]);

        return view('/');
    }
    public function showQuestionNotes()
    {

        $ask_data = DB::SELECT("select * from questions where note_id = ?",[note_id]);

        $answer_data = DB::SELECT("select * from answers where question_id = ?",[question_id]);

        return view('/notes/{id}')->with('ask_data','answer_data',[$ask_data,$answer_data]);
    }
}
