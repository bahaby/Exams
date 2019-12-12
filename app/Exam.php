<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function user(){
        return $this->belongsTo('\App\User');
    }
    public function questions(){
        return $this->belongsToMany('\App\Question');
    }
    public function teacher(){
        return $this->questions->first()->lesson->lecture->belongsTo('\App\User', 'user_id');
    }
}
