<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answer";

    public function BToQuestion(){
        return $this->belongsTo("App\Question", "idQuestion");

    }
}
