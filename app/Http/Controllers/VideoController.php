<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Videocat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Videocat $videocat)
    {
        return view('Panel.Video.creat',[
            'videocat'=>$videocat,
            'videos'=>Video::query()->where('videocat_id',$videocat->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Videocat $videocat)
    {
        Video::query()->create([
            'video'=>$request->file('video')->storeAs('public/VideoGallery', $request->file('video')->getClientOriginalName()),
            'videocat_id'=>$videocat->id,
            'title'=>$request->get('title'),
            'image'=>$request->file('image')->storeAs('public/VideoCoverImage', $request->file('image')->getClientOriginalName()),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Videocat $videocat, Video $video)
    {
        $image=$video->image;
        if ($request->hasFile('image')){
            Storage::delete($video->image);
            $image = $request->file('image')->storeAs('public/VideoCoverImage', $request->file('image')->getClientOriginalName());
        }
        $video->update([
            'title'=>$request->get('title'),
            'image'=>$image
        ]);

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videocat $videocat,Video $video)
    {
        Storage::delete([$video->video,$video->image]);
        $video->delete();
        return redirect()->back();
    }
}
