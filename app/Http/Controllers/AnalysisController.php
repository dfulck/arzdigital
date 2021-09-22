<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use App\Models\Part;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Analysis.index',[
            'analyses'=>Analysis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Analysis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Analysis::query()->create([
           'image'=>$request->file('image')->storeAs('public/AnalysisImage', $request->file('image')->getClientOriginalName()),
           'LogoImage'=>$request->file('LogoImage')->storeAs('public/AnalysisImage', $request->file('LogoImage')->getClientOriginalName()),
           'header'=>$request->get('header'),
           'Fa_title'=>$request->get('Fa_title'),
           'En_title'=>$request->get('En_title'),
            'body'=>$request->get('body'),
            'creator'=>auth()->user()->username
        ]);

        return redirect(route('analyses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function show(Analysis $analysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function edit(Analysis $analysis)
    {
        $part=$analysis->parts()->where('partable_id',$analysis->id)->get();

        return view('Panel.Analysis.edit',[
            'analysis'=>$analysis,
            'parts'=>$part
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analysis $analysis)
    {
        $LogoImage=$analysis->LogoImage;
        $image=$analysis->image;
        if ($request->hasFile('LogoImage')){
            $request->file('LogoImage')->storeAs('public/AnalysisImage', $request->file('LogoImage')->getClientOriginalName());
        }
        if ($request->hasFile('image')){
           $image= $request->file('image')->storeAs('public/AnalysisImage', $request->file('image')->getClientOriginalName());
        }
        $analysis->update([
            'image'=>$image,
            'LogoImage'=>$LogoImage,
            'header'=>$request->get('header',$analysis->header),
            'Fa_title'=>$request->get('Fa_title',$analysis->Fa_title),
            'En_title'=>$request->get('En_title',$analysis->En_title),
            'body'=>$request->get('body',$analysis->body),
        ]);
        $analysis->parts()->create([
            'part_header'=>$request->get('part_header'),
            'part_body'=>$request->get('part_body'),
            'part_image'=>$request->file('part_image')->storeAs('public/PartImage', $request->file('part_image')->getClientOriginalName()),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analysis $analysis)
    {

    }
}
