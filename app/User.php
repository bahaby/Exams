<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'lecture_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    //for student
    public function exams(){
        return $this->hasMany('\App\Exam');
    }

    public function results(){
        return $this->hasMany('\App\Exam');
    }

    //for teacher
    public function lecture(){
        return $this->belongsTo('\App\Lecture');
    }
}
