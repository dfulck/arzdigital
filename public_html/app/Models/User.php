<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    function getProvince(){
        $p=Province::where("id",$this->province)->first();
        if ($p){
            return $p->title;
        }
        else{
            return "";
        }
    }
    function getCity(){
        $p=City::where("id",$this->city)->first();
        if ($p){
            return $p->title;
        }
        else{
            return "";
        }
    }
    function getSubsetsCount(){
        return $this->subsetCounter($this);
    }
    function subsetCounter($user){
        $subsets=User::where("parent_id",$user->id)->get();
        $counter=0;
        if (count($subsets)>0){
            $counter+=count($subsets);
            foreach ($subsets as $subset){
                $counter+=$this->subsetCounter($subset);
            }
            return $counter;
        }
        else{
            return 0;
        }
    }
    function getSubsetsUsers(){
        $subsetUsers=User::where("parent_id",$this->id)->get();
        $data=[];
        $i=-1;
        foreach ($subsetUsers as $subsetUser){
            $i++;
            $data[$i]=new \stdClass();
            $data[$i]->user=$subsetUser;
            $subs=$this->subsets($subsetUser);
            if ($subs==null){
                $data[$i]->children=[];
            }
            else{
                $data[$i]->children=$subs;
            }

        }
        return $data;
    }
    function subsets($user){
        $subsets=User::where("parent_id",$user->id)->get();
        $counter=[];
        foreach ($subsets as $subset){
            $counter[]=$subset;
        }
        if (count($subsets)>0){

            foreach ($subsets as $subset){
                $sus=$this->subsets($subset);
                if ($sus!=null){
                    foreach ($sus as $su){

                        $counter[]=$su;
                    }
                }

            }
            return $counter;
        }
        else{
            return null;
        }
    }
    function getLevelDesc($level){
        $levelDesc=LevelDesc::where("level",$level)->where("u_id",$this->id)->first();
        return $levelDesc;
    }
    function getStatus(){
        $color=new \stdClass();

        if ($this->gameover){
            $color->class = "danger";
            $color->name = "باخت";
            return $color;
        }
        if (!$this->started){
            $color->class = "info";
            $color->name = "شروع نکرده";
            return $color;
        }


        $userLevels=UserLevel::where("status","started")->where("u_id",$this->id)->get();
        $grade=100;
        foreach ($userLevels as $userLevel){
            $now = 100 * ($userLevel->end_time - time()) / ($userLevel->end_time -$userLevel->start_time);
            $now = floor($now);
            if ($now<$grade){
                $grade=$now;
            }

        }
        if ($grade > 75) {
            $color->class = "info";
            $color->name = "آبی";
        }
        else if ($grade <= 75 and $grade > 50){
            $color->class = "success";
            $color->name = "سبز";
        }

        else if ($grade <= 50 and $grade > 25){
            $color->class = "warning";
            $color->name = "زرد";
        }
        else{
            $color->class = "danger";
            $color->name = "قرمز";
        }

        return $color;
    }
}
