<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class VerificationController extends UserController
{


    function single(Request $request)
    {

        return view("user.verification")->withData($this->data);


    }

    function save(Request $request)
    {

        if ($request->submit == "sec1") {
            if ($request->has("password") and $request->password != "") {
                $password = $this->validPass($request->password);
                $this->data->user->password = $this->myHash($password);
                $this->data->user->save();

            }
            $this->data->user->short = $request->short;
            $this->data->user->fakename = $request->fakename;
            $this->data->user->name = $request->name;
            $this->data->user->helper_code = $request->helper_code;
            if ($request->helper_code=="000000"){
                $parent=new User();
                $parent->id=0;
            }
            else{
                $parent = User::where("ref_id", $request->helper_code)->first();

            }
            $this->data->user->parent_id=$parent->id;
            $this->data->user->isVerify = true;
            $this->data->user->save();

            return redirect()->route("user.levels");

        } elseif ($request->submit == "sec2") {
            if ($request->has("profile_image") and $request->profile_image != "") {

                $this->data->user->image = $request->profile_image;
                $this->data->user->save();
                return "OK:1";

            }
            return "ERROR:-1";


        }
    }

    function checkHelperCode(Request $request)
    {
        if ($request->helper_code=="000000"){
            return json_encode(array(
                "status" => "OK:1",
            ));
        }
        $parent = User::where("ref_id", $request->helper_code)->first();
        if ($parent) {
            $subsets = User::where("parent_id", $parent->id)->count();
            if ($subsets >= 2) {
                return json_encode(array(
                    "status" => "ERROR:-2",
                ));
            } else {
                return json_encode(array(
                    "status" => "OK:1",
                ));
            }
        }
        return json_encode(array(
            "status" => "ERROR:-1",
        ));

    }


}
