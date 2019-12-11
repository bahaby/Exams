<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function questions(){
        return $this->hasMany('\App\Question');
    }
    public function lecture(){
        return $this->belongsTo('\App\Lecture');
    }
}
