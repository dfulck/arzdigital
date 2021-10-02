<?php

namespace App\Http\Controllers;

use App\Models\Amarsaderat;
use Faker\Core\File;
use Illuminate\Http\Request;

class AmarsaderatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Amarsaderat.index', [
            'amarsaderats' => Amarsaderat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Amarsaderat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Amarsaderat::query()->create([
            'ostan' => $request->get('ostan'),
            'price' => $request->get('price'),
            'weight' => $request->get('weight'),
            'year' => $request->get('year')
        ]);

        return redirect(route('amarsaderat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Amarsaderat $amarsaderat
     * @return \Illuminate\Http\Response
     */
    public function show(Amarsaderat $amarsaderat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Amarsaderat $amarsaderat
     * @return \Illuminate\Http\Response
     */
    public function edit(Amarsaderat $amarsaderat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Amarsaderat $amarsaderat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amarsaderat $amarsaderat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Amarsaderat $amarsaderat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amarsaderat $amarsaderat)
    {
        $amarsaderat->delete();
        return redirect()->back();
    }
}
