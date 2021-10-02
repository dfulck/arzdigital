<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function paygahetelaresani()
    {
        return view('Panel.Booksv.paygah_etelati_sherkathaye_modiriat_saderat');
    }
    public function jason()
    {
        return view('Panel.Booksv.createjson');
    }
    public function index()
    {
        return view('client.welcome');
    }

    public function Game()
    {
        return view('Panel.Game.index');
    }

    public function data(Request $request)
    {
        return view('Panel.Booksv.gavanin',[
            'gavanins'=>DB::table('book_gavanin_1399')->get()
        ]);
    }

    public function naiim()
    {
        return view('Panel.Amarsaderat.create');
    }


}
