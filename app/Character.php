<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = "character";

    public function BToEvent(){
        return $this->belongsTo("App\Event", "idEvent");

    }
}
