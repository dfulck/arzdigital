<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subcategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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
    public function create(Subcategory $subcategory)
    {
        return view('Panel.Post.create',[
            'subcategory'=>$subcategory,
            'posts'=>Post::query()->where('subcategory_id',$subcategory->id)->get(),
            'tags'=>Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Subcategory $subcategory)
    {
       $post= Post::query()->create([
            'image'=>$request->file('image')->storeAs('public/PostImage', $request->file('image')->getClientOriginalName()),
            'TimeRead'=>$request->get('TimeRead'),
            'creator'=>auth()->user()->username,
            'header'=>$request->get('header'),
            'body'=>$request->get('body'),
            'subcategory_id'=>$subcategory->id
        ]);

       $post->tags()->attach($request->get('tag'));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('Panel.Post.edit',[
            'post'=>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $image=$post->image;
        if ($request->hasFile('image')){
            Storage::delete($post->image);
            $image=$request->file('image')->storeAs('public/ContentImage', $request->file('image')->getClientOriginalName());
        }
        $post->update([
            'TimeRead'=>$request->get('TimeRead'),
            'header'=>$request->get('header'),
            'body'=>$request->get('body'),
            'image'=>$image,
        ]);

        $post->tags()->sync($request->get('tag'));

        return redirect(route('subcategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        $post->delete();
        return redirect()->back();
    }
}
