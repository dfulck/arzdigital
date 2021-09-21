<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Question;
use Illuminate\Database\Schema\PostgresSchemaState;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * @param Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Panel.Question.index',[
            'posts'=>Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        //
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,post $post)
    {

        $question=Question::query()->create([
            'question'=>$request->get('question')
        ]);

        $post->questions()->attach($question->id);
        session()->flash('success','Question Added Successfully');
        return back();

    }

    /**
     * @param Post $post
     * @param Question $question
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post,Question $question)
    {
        return view('Admin.post.Answer.show',[
            'question'=>$question,
            'post'=>$post
        ]);
    }

    /**
     * @param Post $post
     * @param Question $question
     */
    public function edit(Post $post,Question $question)
    {
        dd('edit');
    }

    /**
     * @param Request $request
     * @param Post $post
     * @param Question $question
     */
    public function update(Request $request,Post $post,Question $question)
    {
        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,Question $question)
    {
        dd('destroy');
    }
}
