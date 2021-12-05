<?php

namespace App\Http\Controllers;

use App\Models\Newsemail;
use Illuminate\Http\Request;

class NewsemailController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Newsemail::query()->create([
            'email'=>$request->get('email')
        ]);
        session()->flash('success', "ایجاد شد");
        return redirect()->back();
    }

}
