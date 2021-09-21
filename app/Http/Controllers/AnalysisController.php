<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analysis $analysis)
    {
        //
    }
}
