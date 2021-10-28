<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Morilog\Jalali\Jalalian;

class TargetController extends UserController
{
    function index(){
        $this->data->targets=Target::where("u_id",$this->data->user->id)->get();
        return view("user.targets")->withData($this->data);
    }
    function single(Request $request){
        $this->data->target=new Target();

        return view("user.target")->withData($this->data);
    }
    function save(Request $request){
        $target=new Target();
        $target->body=$request->body;
        $target->u_id=$this->data->user->id;
        $target->start_time=time();
        $ymd=explode("-",$request->end_time);
        $target->end_time = (new Jalalian(intval($ymd[0]), intval($ymd[1]), intval($ymd[2]), 23, 59, 59))->getTimestamp();
        $target->save();
        return redirect()->route("user.targets");
    }

    function remove(Request $request){
        $level=Target::where("id",$request->id)->first();
        if ($level){

            $level->delete();

        }
        return redirect()->route("user.targets");
    }
}
