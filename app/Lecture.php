<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function questions(){
        return $this->hasMany('\App\Question');
    }
    public function lessons(){
        return $this->hasMany('\App\Lesson');
    }
}