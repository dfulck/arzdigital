<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.City.index',[
            'city'=>City::query()->firstOrFail()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $city=City::query()->firstOrFail();
        $image = $city->image;
        if ($request->hasFile('image')) {
            Storage::delete($city->image);
            $image = $request->file('image')->storeAs('public/DanstanihaImage', $request->file('image')->getClientOriginalName());
        }
        $city->update([
            'title' => $request->get('title', $city->title),
            'body' => $request->get('body', $city->body),
            'image' => $image,
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect()->back();

    }

}
