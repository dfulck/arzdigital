<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Target;
use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Morilog\Jalali\Jalalian;

class UserListController extends UserController
{
    function index(){
        $this->data->userLists=UserList::where("u_id",$this->data->user->id)->get();
        return view("user.userlists")->withData($this->data);
    }
    function single(Request $request){
        $this->data->userLists=new UserList();

        return view("user.userlist")->withData($this->data);
    }
    function save(Request $request){
        $userlist=new UserList();
        $userlist->name=$request->name;
        $userlist->u_id=$this->data->user->id;
        $userlist->phone=$request->phone;
        $userlist->created_time=time();
        $userlist->work=$request->work;
        $userlist->relation=$request->relation;
        $userlist->city=$request->city;
        $userlist->save();

        return redirect()->route("user.userLists");
    }

    function remove(Request $request){
        $level=UserList::where("id",$request->id)->first();
        if ($level){

            $level->delete();

        }
        return redirect()->route("user.userLists");
    }
}
