<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Level;
use App\Models\Payment;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Tutorial;
use App\Models\UserLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends UserController
{
    function index()
    {
        $userLevels = DB::table("user_levels")->select("user_levels.*", "levels.number", "levels.type")
            ->join("levels", "levels.id", "=", "user_levels.l_id")
            ->where("levels.number", $this->data->user->last_level)
            ->where("u_id", $this->data->user->id)
            ->where("levels.type", "1")
            ->get();

        $quizs = [];
        foreach ($userLevels as $tutorial) {
            $quiz = new \stdClass();
            $quiz->level = $tutorial;
            $quiz->l_id = $tutorial->l_id;
            $quiz->id = $tutorial->id;
            $q = Quiz::where("l_id", $tutorial->l_id)->where("u_id", $this->data->user->id)->first();
            if ($q) {
                $quiz->quiz = $q;
            }
            $quizs[] = $quiz;
        }
        $this->data->quizs = $quizs;
        return view("user.quizlist")->withData($this->data);
    }

    function single(Request $request)
    {
        $this->data->userLevel = UserLevel::where("id", $request->l_id)->where("u_id", $this->data->user->id)->first();
        $this->data->level = Level::where("id", $this->data->userLevel->l_id)->first();
        $this->data->quiz = Quiz::where("l_id", $this->data->userLevel->l_id)->where("u_id", $this->data->user->id)->first();
        if ($this->data->quiz) {
            if ($this->data->quiz->status == "started") {
                return redirect()->route("user.quiz.start", ["l_id" => $request->l_id, "u_id" => $this->data->user->id]);
            } else {
                return view("user.quizStarter")->withData($this->data);
            }
        } else {
            $quiz = new Quiz();
            $quiz->status = "pending";
            $mData = json_decode($this->data->level->data);
            $this->data->questions = Question::where("level", $this->data->level->number)->inRandomOrder()->limit($mData->count)->get();
            $quiz->questions = json_encode($this->data->questions);
            $quiz->answers = "[]";
            $quiz->created_time = time();
            $quiz->u_id = $this->data->user->id;
            $quiz->l_id = $this->data->level->id;
            $quiz->ul_id = $this->data->userLevel->id;
            $quiz->save();


            return view("user.quizStarter")->withData($this->data);
        }
    }

    function start(Request $request)
    {
        $this->data->userLevel = UserLevel::where("id", $request->l_id)->where("u_id", $this->data->user->id)->first();
        $this->data->level = Level::where("id", $this->data->userLevel->l_id)->first();
        $mData = json_decode($this->data->level->data);
        $this->data->mData = $mData;

        $this->data->quiz = Quiz::where("u_id", $this->data->user->id)->where("ul_id", $this->data->userLevel->id)->where("l_id", $this->data->userLevel->l_id)->first();
        if ($this->data->quiz->status == "pending") {
            $this->data->quiz->status = "started";
            $this->data->quiz->started_time = time();
            $this->data->quiz->end_time = time() + ($this->data->mData->timer * 60);
            $this->data->quiz->save();
        }
        return view("user.quiz")->withData($this->data);
    }

    function setAnswer(Request $request)
    {

        $quiz = Quiz::where("id", $request->quiz_id)->first();
        $userLevel = UserLevel::where("id", $quiz->ul_id)->first();
        if ($quiz->status != "started") {
            return json_encode(array(
                "status" => "ERROR:-1",
            ));
        }
        if ($quiz->end_time < time()) {
            $quiz->status = "loss";
            $userLevel->status = "loss";
            $userLevel->event_time = time();
            $userLevel->save();
            $quiz->save();
            if (! $this->data->user->gameover){
                 $this->data->user->gameover=true;
                 $this->data->user->gameover_count++;
            }
            $this->data->user->save();

            return json_encode(array(
                "status" => "ERROR:-2",
            ));
        }
        $qids = [];
        $answers = json_decode($request->answers);

        for ($i = 0; $i < count($answers); $i++) {
            $qids[] = $answers[$i]->q_id;

        }
        $trueCount = 0;
        $questions = json_decode($quiz->questions);
        foreach ($questions as $question) {
            foreach ($answers as $answer) {
                if ($question->id == $answer->q_id) {
                    if(isset($answer) and $answer!=null and isset($answer->answer)){
                        if ($question->true_answer . "" == $answer->answer . "") {
                            $trueCount++;
                        }
                    }


                    break;
                }
            }
        }
        $grade = intval($trueCount * 100 / count($questions));
        $quiz->answers = $request->answers;
        $quiz->grade = $grade;
        $quiz->trueCount = $trueCount;

        if ($grade >= 60) {
            $quiz->status = "win";
            $userLevel->status = "win";
        } else {
            $quiz->status = "loss";
            if (! $this->data->user->gameover){
                $this->data->user->gameover=true;
                $this->data->user->gameover_count++;
            }
            $this->data->user->save();
            $userLevel->status = "loss";


        }
        $userLevel->event_time = time();
        $userLevel->save();
        $quiz->save();
        return json_encode(array(
            "status" => "OK:1",
            "trueCount" => $trueCount,
            "grade" => intval($trueCount * 100 / count($questions)),
            "answers" => $answers,
            "questions" => $questions,
            "count" => count($questions)
        ));
    }

}
