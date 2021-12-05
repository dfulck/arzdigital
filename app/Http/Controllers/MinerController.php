<?php

namespace App\Http\Controllers;

use App\Models\miner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Panel.Miner.index',[
           'miners'=>miner::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Miner.create');
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
            'logo' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
            'hologram' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
            'title' => ['required'],
            'title1' => ['required'],
            'name_dastgah' => ['required'],
            'barkod_mahsol' => ['required'],
        ]);
          miner::query()->create([
            'logo' => $request->file('logo')->storeAs('public/MinerImage', $request->file('logo')->getClientOriginalName()),
            'hologram' => $request->file('hologram')->storeAs('public/MinerImage', $request->file('hologram')->getClientOriginalName()),
            'title' => $request->get('title'),
            'title1' => $request->get('title1'),
            'name_dastgah' => $request->get('name_dastgah'),
            'barkod_mahsol' => $request->get('barkod_mahsol'),
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect(route('miners.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\miner  $miner
     * @return \Illuminate\Http\Response
     */
    public function show(miner $miner)
    {
        return view('Panel.Miner.print',[
            'miner'=>$miner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\miner  $miner
     * @return \Illuminate\Http\Response
     */
    public function edit(miner $miner)
    {

        return view('Panel.Miner.edit',[
            'miner'=>$miner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\miner  $miner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, miner $miner)
    {
        $hologram = $miner->hologram;
        if ($request->hasFile('hologram')) {
            Storage::delete($miner->hologram);
            $hologram = $request->file('hologram')->storeAs('public/MinerImage', $request->file('hologram')->getClientOriginalName());
        }
        $logo = $miner->logo;
        if ($request->hasFile('logo')) {
            Storage::delete($miner->logo);
            $logo = $request->file('logo')->storeAs('public/MinerImage', $request->file('logo')->getClientOriginalName());
        }
        $request->validate([
            'title' => ['required'],
            'title1' => ['required'],
            'name_dastgah' => ['required'],
            'barkod_mahsol' => ['required'],
        ]);
        $miner->update([
            'logo' =>$logo ,
            'hologram' => $hologram,
            'title' => $request->get('title'),
            'title1' => $request->get('title1'),
            'name_dastgah' => $request->get('name_dastgah'),
            'barkod_mahsol' => $request->get('barkod_mahsol'),
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect(route('miners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\miner  $miner
     * @return \Illuminate\Http\Response
     */
    public function destroy(miner $miner)
    {
        Storage::delete($miner->hologram);
        Storage::delete($miner->logo);
        $miner->delete();
        return redirect()->back();
    }
}
