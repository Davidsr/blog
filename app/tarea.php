<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    /*
    public function isComplete()
    {
    	return false;
    }
    */

    public static function incompleta(){
    	return static::where('completed',0)->get();
    }
/*
    public function scopeIncompleta($query){
    	return $query->where('completed', 0);
    }
  */
}
