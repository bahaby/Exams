<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public function lesson(){
        return $this->belongsTo('\App\Lesson');
    }
    public function choices(){
        return $this->hasMany('\App\Choice');
    }
    public function answer(){
        return $this->hasOne('\App\Answer');
    }
}
