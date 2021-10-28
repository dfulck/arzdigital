<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Yajra\DataTables\DataTables;

class UserController extends AdminController
{
    function index(Request $request)
    {
        $this->data->users=User::orderBy("status","desc")->get();
        return view("admin.users")->withData($this->data);
    }


    function remove(Request $request){
        $user=User::where("id",$request->id)->first();
        if ($user){
            $user->delete();

        }
        return redirect()->route("admin.users");
    }
    function active(Request $request){
        $user=User::where("id",$request->id)->first();
        if ($user){
            $user->status=1;
            $user->updated_time=time();

            $user->save();
        }
        return redirect()->route("admin.users");
    }
    function single(Request $request){
        $user=User::where("id",$request->id)->first();
        if ($user){
            $this->data->user=$user;
            return view("admin.user")->withData($this->data);
        }
        return redirect()->route("admin.users")->withData($this->data);
    }
    function save(Request $request){
        $user=User::where("id",$request->id)->first();
        if ($user){

            $user->status=$request->status;
            $user->phone=$request->phone;
            $user->nat_id=$request->nat_id;
            $user->name=$request->name;
            if ($request->password!=""){
                $user->password=$this->myHash($request->password);
            }
            $user->save();
        }
        return redirect()->route("admin.users");
    }



}
