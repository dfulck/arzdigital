<?php

namespace App\Http\Controllers;

use App\Models\Part;
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
        return view('Panel.Post.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Post.create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
            'TimeRead' => ['required'],
            'header' => ['required'],
            'body' => ['required'],
        ]);
        $post = Post::query()->create([
            'image' => $request->file('image')->storeAs('public/PostImage', $request->file('image')->getClientOriginalName()),
            'TimeRead' => $request->get('TimeRead'),
            'creator' => auth()->user()->username,
            'header' => $request->get('header'),
            'body' => $request->get('body'),
        ]);
        $post->tags()->attach($request->get('tag'));
        session()->flash('success', "ایجاد شد");
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('Panel.Post.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'TimeRead' => ['required'],
            'header' => ['required'],
            'body' => ['required'],
        ]);
        $image = $post->image;
        if ($request->hasFile('image')) {
            Storage::delete($post->image);
            $image = $request->file('image')->storeAs('public/ContentImage', $request->file('image')->getClientOriginalName());
        }
        $post->update([
            'TimeRead' => $request->get('TimeRead', $post->TimeRead),
            'header' => $request->get('header', $post->header),
            'body' => $request->get('body', $post->body),
            'image' => $image,
        ]);
        $post->tags()->sync($request->get('tag'));
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        $post->tags()->detach(Tag::all());
        $post->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
