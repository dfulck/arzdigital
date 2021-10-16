<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Videocat;
use Illuminate\Http\Request;

class VideocatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Video.index',[
           'videocats'=>Videocat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Videocat::query()->create([
           'title'=>$request->get('title')
       ]);
        session()->flash('success', "ایجاد شد");
       return redirect(route('videocats.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videocat  $videocat
     * @return \Illuminate\Http\Response
     */
    public function show(Videocat $videocat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videocat  $videocat
     * @return \Illuminate\Http\Response
     */
    public function edit(Videocat $videocat)
    {

        return view('Panel.Video.edit',[
            'videocat'=>$videocat
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videocat  $videocat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videocat $videocat)
    {
        $videocat->update([
            'title'=>$request->get('title')
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect(route('videocats.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videocat  $videocat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videocat $videocat)
    {
        $video=Video::query()->where('videocat_id',$videocat->id)->exists();
        if ($video){
            session()->flash('error','این دسته بندی حاوی ویدیو است / لطفا اول ویدیو های فرزند را پاک کنید و دوباره اقدام کتید');
            return redirect()->back();
        }else{
            $videocat->delete();
            session()->flash('error', "با موفقیت حذف شد");
            return redirect()->back();
        }

    }
}
