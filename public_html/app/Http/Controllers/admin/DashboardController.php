<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;

use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends AdminController
{

    function index(Request $request){

        return view("admin.dashboard")->withData($this->data);
    }
    function saveSetting(Request $request){
        if($request->has("password") and $request->password!=""){
            $doj=Setting::where("field_name","admin_password")->where("name","admin")->first();

            $doj->value=$this->myHash($request->password);
            $doj->save();
        }
        return redirect()->route("admin.dashboard");
    }
}
