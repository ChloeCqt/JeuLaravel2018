<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class ControllerCaquant extends Controller
{
    public function event($e){
        $e = Event::find($e);
        if($e == false)
            return redirect('404');
        return view ('event', ['event' => $e]);
    }
}
