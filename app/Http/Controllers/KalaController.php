<?php

namespace App\Http\Controllers;

use App\Models\Kala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Kala.index',[
            'kalas'=>Kala::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Kala.create');
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
            'Unit'=>['required'],
            'Top_importing_countries'=>['required'],
            'Top_exporting_countries'=>['required'],
            'Total_volume_of_world_trade'=>['required'],
            'Value_of_Iranian_imports'=>['required'],
            'Global_export_value'=>['required'],
            'Value_of_Iranian_exports'=>['required'],
            'Production_rate'=>['required'],
            'Global_import_value'=>['required'],
            'Iran_rank_in_production'=>['required'],
            'Number_of_commodity_group_tariff_codes'=>['required'],
            'number'=>['required'],
            'body'=>['required'],
            'image'=>['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
        ]);
        Kala::query()->create([
            'title'=>$request->get('title'),
            'Unit'=>$request->get('Unit'),
            'Top_importing_countries'=>$request->get('Top_importing_countries'),
            'Top_exporting_countries'=>$request->get('Top_exporting_countries'),
            'Total_volume_of_world_trade'=>$request->get('Total_volume_of_world_trade'),
            'Value_of_Iranian_imports'=>$request->get('Value_of_Iranian_imports'),
            'Global_export_value'=>$request->get('Global_export_value'),
            'Value_of_Iranian_exports'=>$request->get('Value_of_Iranian_exports'),
            'Production_rate'=>$request->get('Production_rate'),
            'Global_import_value'=>$request->get('Global_import_value'),
            'Iran_rank_in_production'=>$request->get('Iran_rank_in_production'),
            'Number_of_commodity_group_tariff_codes'=>$request->get('Number_of_commodity_group_tariff_codes'),
            'number'=>$request->get('number'),
            'body'=>$request->get('body'),
            'image'=>$request->file('image')->storeAs('public/Kalaimage', $request->file('image')->getClientOriginalName()),
        ]);
        session()->flash('success', "?????????? ????");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function show(Kala $kala)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function edit(Kala $kala)
    {
        return view('Panel.Kala.edit',[
            'kala'=>$kala
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kala $kala)
    {
        $request->validate([
            'title'=>['required'],
            'Unit'=>['required'],
            'Top_importing_countries'=>['required'],
            'Top_exporting_countries'=>['required'],
            'Total_volume_of_world_trade'=>['required'],
            'Value_of_Iranian_imports'=>['required'],
            'Global_export_value'=>['required'],
            'Value_of_Iranian_exports'=>['required'],
            'Production_rate'=>['required'],
            'Global_import_value'=>['required'],
            'Iran_rank_in_production'=>['required'],
            'Number_of_commodity_group_tariff_codes'=>['required'],
            'number'=>['required'],
            'body'=>['required'],
        ]);
        if ($request->hasFile('image')){
            Storage::delete($kala->image);
            $image=$request->file('image')->storeAs('public/Kalaimage', $request->file('image')->getClientOriginalName());
        }
     $image=$kala->image;
        $kala->update([
            'title'=>$request->get('title'),
            'Unit'=>$request->get('Unit'),
            'Top_importing_countries'=>$request->get('Top_importing_countries'),
            'Top_exporting_countries'=>$request->get('Top_exporting_countries'),
            'Total_volume_of_world_trade'=>$request->get('Total_volume_of_world_trade'),
            'Value_of_Iranian_imports'=>$request->get('Value_of_Iranian_imports'),
            'Global_export_value'=>$request->get('Global_export_value'),
            'Value_of_Iranian_exports'=>$request->get('Value_of_Iranian_exports'),
            'Production_rate'=>$request->get('Production_rate'),
            'Global_import_value'=>$request->get('Global_import_value'),
            'Iran_rank_in_production'=>$request->get('Iran_rank_in_production'),
            'Number_of_commodity_group_tariff_codes'=>$request->get('Number_of_commodity_group_tariff_codes'),
            'number'=>$request->get('number'),
            'body'=>$request->get('body'),
            'image'=>$image,
        ]);
        session()->flash('info', "???????????? ?????????? ????");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kala $kala)
    {
        $kala->delete();
        Storage::delete($kala->image);
        session()->flash('error', "???? ???????????? ?????? ????");
        return redirect()->back();
    }
}
