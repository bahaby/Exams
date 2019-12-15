<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['user_id', 'lecture_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function questions(){
        return $this->belongsToMany('\App\Question', 'answers');
    }
    public function lecture(){
        return $this->belongsTo('\App\Lecture');
    }
    public function teacher(){
        return $this->lecture->belongsTo('\App\User', 'user_id');
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
