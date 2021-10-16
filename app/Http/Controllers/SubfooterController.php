<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use App\Models\Leader;
use App\Models\Subcategory;
use App\Models\Subfooter;
use Illuminate\Http\Request;

class SubfooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Subfooter.index',[
            'subfooters'=>Subfooter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Subfooter.create',[
            'subcategories'=>Subcategory::all(),
            'analyses'=>Analysis::all(),
            'leaders'=>Leader::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subfooter::query()->create([
            'title'=>$request->get('title'),
            'link'=>$request->get('link'),
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect(route('subfooters.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subfooter  $subfooter
     * @return \Illuminate\Http\Response
     */
    public function show(Subfooter $subfooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subfooter  $subfooter
     * @return \Illuminate\Http\Response
     */
    public function edit(Subfooter $subfooter)
    {
        return view('Panel.Subfooter.edit',[
            'subcategories'=>Subcategory::all(),
            'analyses'=>Analysis::all(),
            'leaders'=>Leader::all(),
            'subfooter'=>$subfooter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subfooter  $subfooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subfooter $subfooter)
    {
        $subfooter->update([
            'title'=>$request->get('title'),
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect(route('subfooters.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subfooter  $subfooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subfooter $subfooter)
    {
        if ($subfooter->footers()){
            session()->flash('error', "برای حذف این دسته باید اول فرزندان ان را پاک کنید(مدیریت فوتر سایت /مدیریت لیست) ");
            return redirect()->back();
        }
        $subfooter->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
