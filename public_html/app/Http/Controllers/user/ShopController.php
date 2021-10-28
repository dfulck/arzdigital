<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Level;
use App\Models\Product;
use App\Models\Quiz;
use App\Models\Target;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Morilog\Jalali\Jalalian;

class ShopController extends UserController
{
    function index(Request $request)
    {
        if ($request->has("status")){
            $this->data->status=$request->status;
        }
        $this->data->products=Product::where("status",1)->get();
        return view("user.shop")->withData($this->data);
    }


}
