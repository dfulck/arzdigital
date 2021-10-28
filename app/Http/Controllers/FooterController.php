<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Panel.Footer.create',[
           'footer1'=>Footer::query()->where('id',1)->firstOrFail(),
           'footer2'=>Footer::query()->where('id',2)->firstOrFail(),
       ]);
    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * @param Request $request
     * @param Footer $footer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Request $request)
    {
       $footer1= Footer::query()->where('id',1)->firstOrFail();

       $footer1->update([
          'title'=>$request->get('title')
       ]);
        session()->flash('info', "ویرایش تکمیل شد");
       return redirect()->back();

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {

        $footer2= Footer::query()->where('id',2)->firstOrFail();

        $footer2->update([
            'title'=>$request->get('title')
        ]);
        session()->flash('info', "ویرایش تکمیل شد");
        return redirect()->back();

    }

}
