<?php

namespace App\Http\Controllers;

use App\Models\Booksv;
use Illuminate\Http\Request;

class BooksvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Booksv.index',[
            'booksvs'=>Booksv::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Booksv.create');
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
            'pdf'=>['required'],
        ]);
        if ($request->file('pdf')->getClientMimeType()!=='application/pdf'){
             session()->flash('error','فرمت پی دی اف نمیباشد لطفا مجددا تلاش فرمایید');
            return redirect()->back();
        }else{
            Booksv::query()->create([
                'title'=>$request->get('title'),
                'pdf'=>$request->file('pdf')->storeAs('public/PdfBook', $request->file('pdf')->getClientOriginalName())
            ]);
            session()->flash('success', "ایجاد شد");
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booksv  $booksv
     * @return \Illuminate\Http\Response
     */
    public function show(Booksv $booksv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booksv  $booksv
     * @return \Illuminate\Http\Response
     */
    public function edit(Booksv $booksv)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booksv  $booksv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booksv $booksv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booksv  $booksv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booksv $booksv)
    {
       $booksv->delete();
        session()->flash('error', "با موفقیت حذف شد");
       return redirect()->back();
    }
}
