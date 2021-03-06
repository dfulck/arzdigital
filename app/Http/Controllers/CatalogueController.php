<?php

namespace App\Http\Controllers;

use App\Models\catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogueController extends Controller
{
    /**
     * @param Request $request
     * @param catalogue $catalogue
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edite(catalogue $catalogue)
    {
        return view('Panel.Catalogue.edite', [
            'catalogue' => $catalogue
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Catalogue.index', [
            'catalogues' => catalogue::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=auth()->user();
        return view('Panel.Catalogue.create', [
            'catalogues' => catalogue::query()->where('user_id',$user->id)->get()
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
            'image' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
            'title' => ['required'],
            'body' => ['required'],
            'mizan_tolid_dr_sal' => ['required'],
            'qymt_be_tonazh' => ['required'],
        ]);
        catalogue::query()->create([
            'status' => 0,
            'image' => $request->file('image')->storeAs('public/CataloguImage', $request->file('image')->getClientOriginalName()),
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'mizan_tolid_dr_sal' => $request->get('mizan_tolid_dr_sal'),
            'qymt_be_tonazh' => $request->get('qymt_be_tonazh'),
            'user_id'=>auth()->id()
        ]);
        session()->flash('success', "?????????? ????");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\catalogue $catalogue
     * @return \Illuminate\Http\Response
     */
    public function show(catalogue $catalogue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\catalogue $catalogue
     * @return \Illuminate\Http\Response
     */
    public function edit(catalogue $catalogue)
    {
        return view('Panel.Catalogue.edit',[
            'catalogue'=>$catalogue
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\catalogue $catalogue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catalogue $catalogue)
    {
        $request->validate([
            'status' => ['required'],
            'title' => ['required'],
            'body' => ['required'],
            'mizan_tolid_dr_sal' => ['required'],
            'qymt_be_tonazh' => ['required'],
        ]);
        $image = $catalogue->image;
        if ($request->hasFile('image')) {
            Storage::delete($catalogue->image);
            $image = $request->file('image')->storeAs('public/CataloguImage', $request->file('image')->getClientOriginalName());
        }
        $catalogue->update([
            'status' => $request->get('status',0),
            'image' => $image,
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'mizan_tolid_dr_sal' => $request->get('mizan_tolid_dr_sal'),
            'qymt_be_tonazh' => $request->get('qymt_be_tonazh'),
        ]);
        session()->flash('info', "???????????? ?????????? ????");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\catalogue $catalogue
     * @return \Illuminate\Http\Response
     */
    public function destroy(catalogue $catalogue)
    {
        $catalogue->delete();
        Storage::delete($catalogue->image);
        session()->flash('error', "???? ???????????? ?????? ????");
        return redirect()->back();
    }
}
