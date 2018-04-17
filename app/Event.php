<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function BToChapter(){
        return $this->belongsTo("App\Chapter", "idChapter");

    }

    public function Character(){
        return $this->hasMany("App\Character", "idEvent");
    }

    public function Question(){
        return $this->hasMany("App\Question", "idEvent");
    }

    public function Background(){
        return $this->hasMany("App\Background", "idEvent");
    }
}
