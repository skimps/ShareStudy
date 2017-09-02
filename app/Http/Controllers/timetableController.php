<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class timetableController extends Controller
{
    public function show()
    {
        $user = Auth::user();           //ログイン中のユーザーのデータ
        $class = $user['class_id'];     //ユーザーのクラス
        $timetable = array();           //空配列
        for($day=1;$day<6;$day++){
            $list =  DB::select("select * from timetables where class_id = ?,day = ?", [$class, $day]);    //ユーザーのクラスの曜日ごとの時間割
            $timetable += array($day=>array_slice($list,3));                                        //時間割を順番に配列に格納
        }
        $jsonTimetable = json_encode($timetable);       //jsonに変換
        return $jsonTimetable;
    }
}
