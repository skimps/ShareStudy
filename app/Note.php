<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['class_id','text'];
    protected $table = 'Notes';
}
