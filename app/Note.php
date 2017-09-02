<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//noteテーブルに対するモデル
class Note extends Model
{
    protected $fillable=['C_id','text'];
    protected $table='note';
    
}
