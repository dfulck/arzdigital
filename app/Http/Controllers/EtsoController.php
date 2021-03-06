<?php

namespace App\Http\Controllers;

use App\Models\etso;
use App\Models\subetso;
use Illuminate\Http\Request;

class EtsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Etso.index',[
            'etsos'=>etso::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Etso.create');
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
            'title'=>['required']
        ]);
        etso::query()->create([
            'title'=>$request->get('title')
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect(route('etsos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\etso  $etso
     * @return \Illuminate\Http\Response
     */
    public function show(etso $etso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\etso  $etso
     * @return \Illuminate\Http\Response
     */
    public function edit(etso $etso)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\etso  $etso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etso $etso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etso  $etso
     * @return \Illuminate\Http\Response
     */
    public function destroy(etso $etso)
    {
       $subetso= subetso::query()->where('etso_id',$etso->id)->get();
       foreach ($subetso as $sub){
           $sub->delete();
       }
        $etso->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
