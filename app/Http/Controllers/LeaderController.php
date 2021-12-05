<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\leader;
use Illuminate\Http\Request;

class leaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Leader.index',[
            'leaders'=>leader::all()
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
        leader::query()->create([
            'title'=>$request->get('title')
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect(route('leaders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(leader $leader)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(leader $leader)
    {
        return view('Panel.Leader.edit',[
            'leader'=>$leader
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leader $leader)
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
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(leader $leader)
    {
        if ($leader->HasNumberContent()){
            session()->flash('error','این دسته بندی حاوی مطلب میباشد');
            return redirect()->back();
        }

        $leader->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
