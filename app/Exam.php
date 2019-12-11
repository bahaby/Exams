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
}
