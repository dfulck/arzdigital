<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;
use App\Models\Level;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends AdminController
{
    function index()
    {
        $this->data->tutorials = Tutorial::all();;
        return view("admin.tutorials")->withData($this->data);
    }

    function single(Request $request)
    {
        if ($request->has("id")) {
            $this->data->tutorial = Tutorial::where("id", $request->id)->first();
            $this->data->tutorial->answers = json_decode($this->data->tutorial->answers);
        } else {
            $this->data->tutorial = new Tutorial();
        }
        return view("admin.tutorial")->withData($this->data);
    }

    function save(Request $request)
    {
        if ($request->has("id")) {
            $tutorial = Tutorial::where("id", $request->id)->first();
        } else {
            $tutorial = new Tutorial();
        }
        $tutorial->body = $request->body;
        $tutorial->level = $request->level;
        $tutorial->title = $request->title;
        $tutorial->files = json_encode($request->input("files"));

        $tutorial->save();
        return redirect()->route("admin.tutorials");
    }


    function remove(Request $request){
        $tutorial=Tutorial::where("id",$request->id)->first();
        if ($tutorial){

            $tutorial->delete();

        }
        return redirect()->route("admin.tutorials");
    }
}
