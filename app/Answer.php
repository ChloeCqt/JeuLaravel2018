<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function BToQuestion(){
        return $this->belongsTo("App\Question", "idQuestion");

    }
}
