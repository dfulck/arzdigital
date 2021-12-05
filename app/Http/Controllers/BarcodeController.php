<?php

namespace App\Http\Controllers;

use App\Models\barcode;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Panel.Barcode.index',[
            'barcodes'=>barcode::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Barcode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        barcode::query()->create([
            'code'=>$request->get('code')
        ]);
        return redirect(route('barcodes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show(barcode $barcode)
    {
        return view('Panel.Barcode.print',[
            'barcode'=>$barcode
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function edit(barcode $barcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barcode $barcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(barcode $barcode)
    {
        $barcode->delete();
        return redirect()->back();
    }
}
