<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Level;
use App\Models\LevelDesc;
use App\Models\Quiz;
use App\Models\Target;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Morilog\Jalali\Jalalian;

class LevelController extends UserController
{
    function index()
    {
        $level=$this->data->user->last_level-1;
        if ($level>0){
            $desc=LevelDesc::where("u_id",$this->data->user->id)->where("level",$this->data->user->last_level-1)->first();
            if (!$desc){
                $this->data->desc=true;
            }
        }



        $data = [];
        $levels = UserLevel::where("u_id", $this->data->user->id)->get();
        foreach ($levels as $level) {
            $temp = $level->getLevel();

            if ($temp == $this->data->user->last_level) {
                $data[] = $level;
            }
        }
        $this->data->levels = $data;

        $levels=DB::table("user_levels")->select("user_levels.*","levels.number")
            ->join("levels","levels.id","=","user_levels.l_id")->where("number",$this->data->user->last_level)->where("u_id",$this->data->user->id)->get();

        $win=true;
        foreach ($levels as $level){
            if ($level->status!="win"){
                $win=false;
            }
        }
        if ($this->data->user->last_level==0){
            $win=false;
        }
        if ($win){
            $last_next_use=$this->data->user->last_next_use;
            if ($last_next_use==null or $last_next_use==""){
                $last_next_use=-1;
            }
            if ((time()-$last_next_use)<24*3600){
                $win=false;
                $this->data->timer=(24*3600)-(time()-$last_next_use);
            }

        }


        $this->data->nextLevel=$win;

        return view("user.levels")->withData($this->data);
    }

    function single(Request $request)
    {
        $this->data->level = UserLevel::where("u_id", $this->data->user->id)->where("id", $request->id)->first();
        $this->data->level->detail = Level::where("id", $this->data->level->l_id)->first();
        return view("user.level")->withData($this->data);
    }

    function resetLevels(Request $request)
    {
        $userLevels = UserLevel::where("u_id", $this->data->user->id)->get();
        foreach ($userLevels as $userLevel) {
            $userLevel->delete();
        }
        $userLevels = Quiz::where("u_id", $this->data->user->id)->get();
        foreach ($userLevels as $userLevel) {
            $userLevel->delete();
        }

        $descs=LevelDesc::where("u_id",$this->data->user->id)->get();
        foreach ($descs as $desc) {
            $desc->delete();
        }

        $this->data->user->gameover = false;
        $this->data->user->gameover_count=0;
        $this->data->user->started = 0;
        $this->data->user->last_level = 0;
        $this->data->user->save();
        return "OK:1";

    }

    function beginRace(Request $request)
    {

        $this->data->user->gameover = false;
        $this->data->user->gameover_count=0;

        $this->data->user->started = true;
        $this->data->user->last_level = 1;
        $this->data->user->contract = $request->contract;

        $userlevels = UserLevel::where("u_id", $this->data->user->id)->get();
        foreach ($userlevels as $userlevel) {
            $userlevel->delete();
        }
        $levels = Level::where("number", 1)->get();

        foreach ($levels as $level){
            $userLevel = new UserLevel();
            $userLevel->start_time = time();
            $userLevel->end_time = time()  + (24 * $level->day * 3600);
            $userLevel->status = "started";
            $userLevel->l_id = $level->id;
            $userLevel->u_id = $this->data->user->id;
            $userLevel->save();
        }



        $this->data->user->save();
        return redirect()->route("user.levels")->withData($this->data);
    }

    function check(Request $request)
    {
        $userLevel = UserLevel::where("u_id", $this->data->user->id)->where("id", $request->id)->first();

        if ($userLevel) {
            $level = Level::where("id", $userLevel->l_id)->first();
            if ($userLevel->status != "started") {
                return "ERROR:-200";

            }

            if ($userLevel->end_time < time()) {
                $userLevel->status = "loss";
                $userLevel->event_time = $userLevel->end_time;
                $userLevel->save();
                return "ERROR:-100";
            }

            if ($level->type == 2) {
                $targetsCount = Target::where("u_id", $this->data->user->id)->count();
                if ($targetsCount >= intval($level->data)) {
                    $userLevel->status = "win";
                    $userLevel->event_time = time();
                    $userLevel->save();
                    return "OK:1";
                } else {
                    return "ERROR:-21";
                }
            } elseif ($level->type == 3) {
                $userListsCount = UserList::where("u_id", $this->data->user->id)->count();
                if ($userListsCount >= intval($level->data)) {
                    $userLevel->status = "win";
                    $userLevel->event_time = time();
                    $userLevel->save();
                    return "OK:1";
                } else {
                    return "ERROR:-22";
                }

            } elseif ($level->type === 4) {
                $data = json_decode($level->data);
                $subsetUsers = User::where("parent_id", $this->data->user->id)->get();
                $rightSubsets = [];
                $leftSubsets = [];
                if (isset($subsetUsers[0])) {
                    $rightSubsets = $this->subsetUsers($subsetUsers[0]);
                    $rightSubsets[]=$subsetUsers[0];
                }
                if (isset($subsetUsers[1])) {
                    $leftSubsets = $this->subsetUsers($subsetUsers[1]);
                    $leftSubsets[]=$subsetUsers[1];

                }


                $targetRightLevelCount = 0;

                foreach ($rightSubsets as $rightSubset) {
                    if ($rightSubset->last_level >= $data->right1->level) {
                        $targetRightLevelCount++;
                    }
                }
                if ($targetRightLevelCount >= $data->right1->count) {
                    $right = true;
                } else {
                    $targetRightLevelCount = 0;

                    foreach ($rightSubsets as $rightSubset) {
                        if ($rightSubset->last_level >= $data->right2->level) {
                            $targetRightLevelCount++;
                        }
                    }
                    if ($targetRightLevelCount >= $data->right2->count) {
                        $right = true;
                    } else {
                        return "ERROR:-3";
                    }
                }

                $targetLeftLevelCount = 0;

                foreach ($leftSubsets as $leftSubset) {
                    if ($leftSubset->last_level >= $data->left1->level) {
                        $targetLeftLevelCount++;
                    }
                }
                if ($targetLeftLevelCount >= $data->left1->count) {
                    $left = true;
                } else {
                    $targetLeftLevelCount = 0;

                    foreach ($leftSubsets as $leftSubset) {
                        if ($leftSubset->last_level >= $data->left2->level) {
                            $targetLeftLevelCount++;
                        }
                    }
                    if ($targetLeftLevelCount >= $data->left2->count) {
                        $left = true;
                    } else {
                        return "ERROR:-4";
                    }
                }

                $userLevel->status = "win";
                $userLevel->event_time = time();
                $userLevel->save();
                return "OK:1";

            }
        } else {
            return "ERROR:-1";
        }
    }
}
