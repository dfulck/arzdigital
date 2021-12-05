<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Panel.Link.index', [
            'instagram' => link::query()->where('title', 'instagram')->firstOrFail(),
            'telegram' => link::query()->where('title', 'telegram')->firstOrFail(),
            'twitter' => link::query()->where('title', 'whatsapp')->firstOrFail()
        ]);
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        $instagram = link::query()->where('title', 'instagram')->firstOrFail();
        $telegram = link::query()->where('title', 'telegram')->firstOrFail();
        $twitter = link::query()->where('title', 'whatsapp')->firstOrFail();
        $instagram->update([
           'link'=>$request->get('instagram')
        ]);
        $telegram->update([
            'link'=>$request->get('telegram')
        ]);
        $twitter->update([
            'link'=>$request->get('twitter')
        ]);

        session()->flash('info', "ویرایش با موفقیت انجام شد");
        return redirect()->back();
    }

}
