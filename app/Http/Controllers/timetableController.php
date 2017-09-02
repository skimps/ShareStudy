<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class timetableController extends Controller
{
    public function showTimetable(){
        $user = Auth::user();
        $class = $user['C_id'];
        $timetable = array();
        for($day=1;$day<6;$day++){
            $list =  DB::select("select * from where C_id = ?,day = ?", [$class, $day]);
            $timetable += array($day=>array_slice($list,3));
        }
        return json_encode($timetable);
    }
}
