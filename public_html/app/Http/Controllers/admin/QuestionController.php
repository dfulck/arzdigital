<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;
use App\Models\Level;
use App\Models\Mission;
use App\Models\Question;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class QuestionController extends AdminController
{
    function index(){
        $this->data->questions=Question::all();;
        return view("admin.questions")->withData($this->data);
    }
    function single(Request $request){
        if ($request->has("id")){
            $this->data->question=Question::where("id",$request->id)->first();
            $this->data->question->answers=json_decode($this->data->question->answers);
        }
        else{
            $this->data->question=new Tutorial();
        }
        return view("admin.question")->withData($this->data);
    }
    function save(Request $request){
        if ($request->has("id")){
            $question=Question::where("id",$request->id)->first();
        }
        else{
            $question=new Question();
        }
        $question->body=$request->body;
        $question->level=$request->level;
        $question->answers=json_encode($request->answers);
        $question->true_answer=$request->trueAnswer;
        $question->save();
        return redirect()->route("admin.questions");
    }
    function remove(Request $request){
        $question=Question::where("id",$request->id)->first();
        if ($question){
            $question->delete();
        }
        return redirect()->route("admin.questions");

    }
}
