<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }
}
