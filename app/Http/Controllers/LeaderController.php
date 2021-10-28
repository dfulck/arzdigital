<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Leader.index',[
            'leaders'=>Leader::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Leader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required'],
        ]);
        Leader::query()->create([
            'title'=>$request->get('title')
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect(route('leaders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(Leader $leader)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        return view('Panel.Leader.edit',[
            'leader'=>$leader
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        $request->validate([
            'title'=>['required'],
        ]);
        $leader->update([
            'title'=>$request->get('title')
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect(route('leaders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        if ($leader->HasNumberContent()){
            return session()->flash('error','this category have contets');
        }

        $leader->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
