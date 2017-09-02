<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Timetable;

class timetableController extends Controller
{
    public function show(){
        // $user = Auth::user();       //ログイン中のユーザーのデータ
        // $class = $user['class_id'];  //ユーザーのクラス
        // var_dump($user);
        $timetable = Timetable::all();

        return json_encode($timetable);
    }
}
