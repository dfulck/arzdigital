<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Panel.Online.index');
    }
}
