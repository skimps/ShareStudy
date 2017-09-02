<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Timetable;

class timetableController extends Controller
{
    public function index()
    {
        $user = Auth::user();           //ログイン中のユーザーのデータ
        $class = $user['class_id'];     //ユーザーのクラス

        $data["timetable"] = Timetable::where('class_id',$class)->get;

        //print_r($data["timetable"]);

        return view('timetable')->with('data', $data["timetable"]);
    }
}
