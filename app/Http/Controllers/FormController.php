<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Form.index',[
            'forms'=>Form::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('pdf')->getClientMimeType()!=='application/pdf'){
            session()->flash('error','فرمت پی دی اف نمیباشد لطفا مجددا تلاش فرمایید');
            return redirect()->back();
        }else {
            Form::query()->create([
                'title' => $request->get('title'),
                'pdf' => $request->file('pdf')->storeAs('public/PdfBook', $request->file('pdf')->getClientOriginalName())
            ]);
            session()->flash('success', "ایجاد شد");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form->delete();
        session()->flash('error', "با موفقیت حذف شد");
        return redirect()->back();
    }
}
