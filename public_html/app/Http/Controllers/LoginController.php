<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function checkIdCode(Request $request)
    {
        if ($request->id_code == "000000") {
            return json_encode(array(
                "status" => "OK:1",
            ));
        }
        $parent = User::where("ref_id", $request->id_code)->first();
        if ($parent) {
            return json_encode(array(
                "status" => "OK:1",
            ));
        } else {
            return json_encode(array(
                "status" => "ERROR:-1",
            ));
        }

    }

    function login(Request $request)
    {
        if (true) {
            $secretKey = "6LdSNrscAAAAAIg6NPigBNqWVOsl9xJ87MTWbBLy";

            // post request to server
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($request->input("g-recaptcha-response"));
            $response = file_get_contents($url);
            $responseKeys = json_decode($response, true);
            // should return JSON with success as true
            if (true) {
                $setting = Setting::where("field_name", "admin_password")->first();
                if ($request->has("submit") && $request->phone == $setting->name && $this->myHash($request->password) == $setting->value) {
                    session(['admin' => array(
                        "fullname" => "Owner",
                        "username" => "Owner",
                        "rule" => "admin",
                        "id" => 0,
                        "logged" => "true",
                        "permissions" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]
                    )]);
                    return redirect()->route("admin.dashboard");
                } elseif ($request->has("submit")) {
                    $phone = $request->phone;
                    $password = $this->validPass($request->password);
                    if (!$phone = $this->validatePhone($phone)) {
                        Session::flash('message', 'شماره وارد شده اشتباه است');
                        return redirect()->route("login");
                    }
                    $user = User::where("phone", $phone)->where(function ($query) use ($password) {
                        return $query->where("password", $this->myHash($password))->orWhere("new_pass", $this->myHash($password));
                    })->first();
                    if ($user) {
                        session(['user' => array(
                            "fullname" => $user->name,
                            "username" => $user->phone,
                            "rule" => "user",
                            "id" => $user->id,
                            "permission" => null,
                            "logged" => "true"
                        )]);

                        return redirect()->route("user.dashboard");
                    }

                }
            }
        }
        return view("login");
    }

    function forgot(Request $request)
    {

        if ($request->has("g-recaptcha-response")) {
            $secretKey = "6LdSNrscAAAAAIg6NPigBNqWVOsl9xJ87MTWbBLy";

            // post request to server
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($request->input("g-recaptcha-response"));
            $response = file_get_contents($url);
            $responseKeys = json_decode($response, true);
            // should return JSON with success as true
            if ($responseKeys["success"]) {
                $phone = $request->phone;

                if (!$phone = $this->validatePhone($phone)) {
                    Session::flash('message', 'شماره وارد شده اشتباه است');
                    return redirect()->route("forgot");
                }
                $user = User::where("phone", $phone)->first();
                $newPass = $this->createPassword(8);
                $user->new_pass = $this->myHash($newPass);


                $user->save();
                $this->sendSms("0" . $phone, "رمز ورود شما به سایت " . "\n" . $newPass);

                Session::flash('message', 'رمز برای شما ارسال شد');
                return view("login");
            } else {
                Session::flash('message', 'شما به عنوان ربات شناخته شدید');
                return redirect()->route("forgot");
            }


        } else {
            Session::flash('message', 'تیک من ربات نیستم را بزنید');
            return redirect()->route("forgot");
        }

    }

    function register(Request $request)
    {
        if ($request->has("g-recaptcha-response")) {
            $secretKey = "6LdSNrscAAAAAIg6NPigBNqWVOsl9xJ87MTWbBLy";

            // post request to server
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($request->input("g-recaptcha-response"));
            $response = file_get_contents($url);
            $responseKeys = json_decode($response, true);
            // should return JSON with success as true
            if ($responseKeys["success"]) {
                $phone = $request->phone;

                if (!$phone = $this->validatePhone($phone)) {
                    Session::flash('message', 'شماره وارد شده اشتباه است');
                    return redirect()->route("register");
                }


                $user = User::where("phone", $phone)->first();


                if ($user) {
                    $user->updated_time = time();

                    if ($user->status == 0) {
                        $user->delete();
                        $this->data->token = $this->addUser($request);
                        return view("active")->withData($this->data);
                    } else {
                        Session::flash('message', 'با این مشخصات قبلا ثبت نام شده است');
                        return redirect()->route("register");
                    }
                } else {
                    $this->data->token = $this->addUser($request);
                    return view("active")->withData($this->data);
                }
            } else {
                Session::flash('message', 'شما به عنوان ربات شناخته شدید');
                return redirect()->route("register");
            }
        } else {
            Session::flash('message', 'تیک من ربات نیستم را بزنید');
            return redirect()->route("register");
        }
    }

    function active(Request $request)
    {

        $user = User::where("token", $request->token)->where("active_code", $request->code)->first();

        if ($user) {
            $user->status = 1;
            $user->created_time = time();

            $user->save();
            session(['user' => array(
                "fullname" => $user->name,
                "username" => $user->phone,
                "rule" => "user",
                "id" => $user->id,
                "permissions" => null,
                "logged" => "true"
            )]);
            return redirect()->route("user.dashboard");
        }
        $this->data->token = $request->token;
        return view("active")->withData($this->data);

    }

    function logout(Request $request)
    {


        $request->session()->forget('user');
        $request->session()->forget('admin');
        return redirect("/");
    }

    function addUser(Request $request)
    {

        $active_code = 1111;
        $phone = $request->phone;
        $password = $this->validPass($request->password);
        $phone = $this->validatePhone($phone);

        $user = new User();
        $user->created_time = time();

        $user->phone = $phone;
        $user->password = $this->myHash($password);
        $user->created_time = time();
        $user->status = 0;
        $user->active_code = $active_code;
        $user->id_code = $request->id_code;
        $user->level_data = "[]";
        $user->parent_id = 0;
        $user->save();
        $user->token = $this->myHash($user->id, true);
        $user->save();

//        $this->sendSms("0" . $phone, "کد فعالسازی شما : " . $active_code);

        return $user->token;
    }

    function getHash(Request $request)
    {
        return $this->myHash("admin");
    }
}
