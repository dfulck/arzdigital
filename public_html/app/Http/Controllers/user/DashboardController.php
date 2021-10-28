<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\LevelDesc;
use App\Models\Order;
use App\Models\Stock;
use App\Models\Target;
use App\Models\Ticket;
use App\Models\UserLevel;
use App\Models\UserList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends UserController
{
    function index(Request $request){
        return view("user.dashboard")->withData($this->data);
    }

    function myteam(){
        return view("user.subsets")->withData($this->data);
    }
    function roads(){
        return view("user.roads")->withData($this->data);
    }
    function newroads(){
        return view("user.new_road")->withData($this->data);
    }
    function saveLevelDesc(Request $request){
        $levelNumber=$this->data->user->last_level-1;
        $desc=LevelDesc::where("u_id",$this->data->user->id)->where("level",$levelNumber)->first();
        if (!$desc){
            $desc=new LevelDesc();
            $desc->level=$levelNumber;
            $desc->u_id=$this->data->user->id;
            $desc->created_time=time();
            $desc->body=$request->body;
            $desc->save();
        }
    }
}
