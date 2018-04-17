<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = "chapter";

    public function Event(){
        return $this->hasMany("App\Event", "idChapter");
    }
}
