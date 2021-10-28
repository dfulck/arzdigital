<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $permissions = [

        ["index" => 1, "title" => "داشبورد"],
        ["index" => 2, "title" => "لیست کاربران"],
        ["index" => 4, "title" => "لیست سهم ها"],
        ["index" => 5, "title" => "اضافه کردن سهم"],
        ["index" => 6, "title" => "احراز هویت"],
        ["index" => 7, "title" => "درخواست های واریز"],
        ["index" => 8, "title" => "گزارشات"],
        ["index" => 9, "title" => "سیگنال ها"],
        ["index" => 10, "title" => "نظرات و تماس ها"],
        ["index" => 11, "title" => "تیکت ها"],
        ["index" => 12, "title" => "قوانین"],

    ];

    function __construct()
    {
        parent::__construct();
        $this->middleware(function ($request, $next) {

            return $next($request);
        });




    }

    protected function setAdminDashboardData()
    {
        $this->data->dashboardData = new \stdClass();
        $this->data->dashboardData->verifications = User::select("name", "id")->where("status", 3)->orderBy("id", "desc")->get();
        $this->data->dashboardData->tickets = DB::table("tickets")
            ->select("subject", "users.name", "tickets.updated_time", "tickets.id")
            ->join("users", "users.id", "=", "tickets.u_id")
            ->where("tickets.is_new", 1)
            ->where("tickets.parent_id", 0)
            ->orderBy("tickets.updated_time", "desc")
            ->get();

    }
}
