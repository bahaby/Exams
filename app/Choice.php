<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['choice', 'text', 'image', 'question_id'];

    public function question(){
        return $this->belongsTo('\App\Question');
    }
}
