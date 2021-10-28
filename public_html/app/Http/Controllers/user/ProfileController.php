<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProfileController extends UserController
{


    function single(Request $request){

            $this->data->parent=User::where("id",$this->data->user->parent_id)->first();
            if (!$this->data->parent){
                $this->data->parent=new User();
            }
            return view("user.profile")->withData($this->data);


    }
    function save(Request $request){

        if ($request->submit=="sec1"){
            if ($request->has("password") and $request->password!=""){
                $password=$this->validPass($request->password);
                $this->data->user->password=$this->myHash($password);
                $this->data->user->save();
                Session::flash('ok', 'رمز ورود با موفقیت ذخیره شد');
                return redirect()->route("user.profile");
            }
            $this->data->user->short=$request->short;
            $this->data->user->fakename=$request->fakename;
            $this->data->user->name=$request->name;
            $this->data->user->save();
            return redirect()->route("user.profile");

        }
        elseif ($request->submit=="sec2"){
            if ($request->has("profile_image") and $request->profile_image!=""){

                $this->data->user->image=$request->profile_image;
                $this->data->user->save();
                return "OK:1";

            }
            return "ERROR:-1";


        }
    }

}
