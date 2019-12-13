<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function lessons(){
        return $this->hasMany('\App\Lesson');
    }
    public function teacher(){
        return $this->belongsTo('\App\User', 'id');
    }
}