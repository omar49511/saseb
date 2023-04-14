<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function cities($id){
        $state = State::find($id);
        return response(json_encode($state->cities), 200)->header('Content-type','text/plain');
    }
    //
}
