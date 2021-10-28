<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->middleware(function ($request, $next) {
            $session = $request->session()->get("user");
            $this->data->user = User::where("id", $session["id"])->first();
            $url=$request->getRequestUri();
            if (!$this->data->user->isVerify){
                if (strpos($url,"verification")){
                    return $next($request);
                }
                else{
                    return redirect()->route("user.verification");
                }
            }
            return $next($request);



        });

    }

}
