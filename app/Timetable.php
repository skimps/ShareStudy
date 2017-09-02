<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    //
    protected $fillable = [
        'class_id','day','one','two','three','four','five','six'
    ];
}
