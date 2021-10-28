<?php

namespace App\Http\Controllers;

use App\Models\etso;
use App\Models\subetso;
use Illuminate\Http\Request;

class SubetsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Subetso.index',[
            'etsos'=>etso::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(etso $etso)
    {
        return view('Panel.Subetso.create',[
            'etso'=>$etso,
            'subetsos'=>subetso::query()->where('etso_id',$etso->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,etso $etso)
    {
       $request->validate([
           'etso_id'=>['required'],
           'NameTashakol'=>['required'],
           'number'=>['required'],
           'fox'=>['required'],
       ]);
       subetso::query()->create([
           'etso_id'=>$etso->id,
           'NameTashakol'=>$request->get('NameTashakol'),
           'number'=>$request->get('number'),
           'fox'=>$request->get('fox'),
       ]);
        session()->flash('success', "ایجاد شد");
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subetso  $subetso
     * @return \Illuminate\Http\Response
     */
    public function show(subetso $subetso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subetso  $subetso
     * @return \Illuminate\Http\Response
     */
    public function edit(subetso $subetso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subetso  $subetso
     * @return \Illuminate\Http\Response
     */
    public function destroy(etso $etso,subetso $subetso)
    {
        $subetso->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
