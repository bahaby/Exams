<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['correct_answer', 'lesson_id', 'text', 'image'];
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
    public function choices(){
        return $this->hasMany(Choice::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
