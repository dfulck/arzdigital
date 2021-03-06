<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Content.index',[
            'contents'=>Content::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(leader $leader)
    {
        return view('Panel.Content.create',[
            'leader'=>$leader,
            'contents'=>Content::query()->where('leader_id',$leader->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(leader $leader,Request $request)
    {
        $request->validate([
            'header'=>['required'],
            'body'=>['required'],
            'image'=>['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
        ]);
        Content::query()->create([
            'header'=>$request->get('header'),
            'body'=>$request->get('body'),
            'image'=>$request->file('image')->storeAs('public/ContentImage', $request->file('image')->getClientOriginalName()),
            'leader_id'=>$leader->id,
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('Panel.Content.edit',[
            'content'=>$content
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'header'=>['required'],
            'body'=>['required'],
        ]);
        $image=$content->image;
        if ($request->hasFile('image')){
            Storage::delete($content->image);
            $image=$request->file('image')->storeAs('public/ContentImage', $request->file('image')->getClientOriginalName());
        }
        $content->update([
            'header'=>$request->get('header'),
            'body'=>$request->get('body'),
            'image'=>$image,
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        Storage::delete($content->image);
        $content->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
