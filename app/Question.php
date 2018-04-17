<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function BToEvent(){
        return $this->belongsTo("App\Event", "idEvent");

    }

    public function Answer(){
        return $this->hasMany("App\Answer", "idQuestion");
    }
}
