<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['correct', 'total', 'lesson_id', 'exam_id'];

    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    public function grade(){
        return $this->exam->grade;
    }

}
