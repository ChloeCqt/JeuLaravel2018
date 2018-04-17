<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function BToEvent(){
        return $this->belongsTo("App\Event", "idEvent");

    }
}
