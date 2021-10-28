<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends UserController
{
    function index(){
        $this->data->tutorials=Tutorial::where("level",$this->data->user->last_level)->get();
        return view("user.tutorials")->withData($this->data);
    }
    function single(Request $request){
        $this->data->tutorial=Tutorial::where("id",$request->id)->where("level",$this->data->user->last_level)->first();
        if(! $this->data->tutorial){
            return redirect()->route("user.tutorials");
        }
        return view("user.tutorial")->withData($this->data);
    }

}
