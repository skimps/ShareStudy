<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class questionController extends Controller
{
    public function ask(){
        $user = Auth::user();       //ログイン中のユーザーのデータ
        $userID = $user['U_id'];    //ユーザーID





    }
}
