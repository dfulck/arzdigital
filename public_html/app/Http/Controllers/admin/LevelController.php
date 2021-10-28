<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;
use App\Models\Level;
use App\Models\Question;
use App\Models\Tutorial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LevelController extends AdminController
{
    function index(){
        $this->data->levels=Level::all();
        return view("admin.levels")->withData($this->data);
    }
    function single(Request $request){
        if ($request->has("id")){
            $this->data->level=Level::where("id",$request->id)->first();
            $renderData=new \stdClass();
            if ($this->data->level->type==1){
                $renderData->questions=Question::where("level",$this->data->level->number)->get();
                $renderData->tutorials=Tutorial::where("level",$this->data->level->number)->get();
                $renderData->level=$this->data->level;
                $renderData->data=json_decode($this->data->level->data);
                $data=View::make('admin.types.question', [
                    'data' => $renderData
                ])->render();

            }
            if ($this->data->level->type==2){
                $renderData->data=$this->data->level->data;
                $data=View::make('admin.types.fill_targets')->withData($renderData)->render();
            }
            if ($this->data->level->type==3){
                $renderData->data=$this->data->level->dataq;
                $data=View::make('admin.types.fill_targets')->withData($renderData)->render();
            }
            if ($this->data->level->type==4){
                $renderData=json_decode($this->data->level->data);
                $data=View::make('admin.types.team')->withData($renderData)->render();
            }
            $this->data->level->renderData=$data;
        }
        else{
            $this->data->level=new Level();
        }
        return view("admin.level")->withData($this->data);
    }
    function save(Request $request){
        $level=new Level();
        if ($request->has("id")){
            $level=Level::where("id",$request->id)->first();
        }
        $level->number=$request->number;
        $level->type=$request->type;
        $level->next_price=$request->next_price;
        $level->day=$request->day;
        $level->subject=$request->subject;

        if ($level->type==4){
            $level->data=json_encode($request->data);
        }
        elseif ($level->type==1){
            $data=array(
                "count"=>$request->count,
                "timer"=>$request->timer
            );
            $level->data=json_encode($data);
        }
        else{
            $level->data=$request->data;
        }
        $level->t_id=($request->type==1)?json_encode($request->t_id):"";
        $level->save();
        return redirect()->route("admin.levels");
    }
    function getTypeData(Request $request){
        $data="";
        if ($request->type==1){
            $this->data->questions=Question::where("level",$request->level)->get();
            $this->data->tutorials=Tutorial::where("level",$request->level)->get();

            $data=View::make('admin.types.question', [
                'data' => $this->data
            ])->render();

        }
        if ($request->type==2){
            $data=View::make('admin.types.fill_targets')->render();
        }
        if ($request->type==3){
            $data=View::make('admin.types.fill_targets')->render();
        }
        if ($request->type==4){
            $data=View::make('admin.types.team')->render();
        }
        return $data;
    }
    function remove(Request $request){
        $level=Level::where("id",$request->id)->first();
        if ($level){

            $level->delete();

        }
        return redirect()->route("admin.levels");
    }
}
