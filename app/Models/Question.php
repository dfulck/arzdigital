<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded=[];





    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('answer')
            ->withTimestamps();
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getQuestionAnswer(question $question)
    {
        $answers=$this->users()->where('question_id',$question->id)->get();
        return $answers;
    }

    public function HasAnswerThisQuestion(question $question)
    {
        $HasAnswer=$this->users()->where('question_id',$question->id)->get();
        if (!$HasAnswer){
            return null;
        }
        return $HasAnswer;
    }

}
