<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Psr7\Stream;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function PriceTest()
    {
        $client = new Client();
        $URI = Http::get('https://production.api.coindesk.com/v1/currency/ticker?currencies=BTC,ETH,LTC,XRP,BCH')->json();
        $response = json_encode($URI);
        $res = json_decode($response);
        dd($res->data->currency);
        return view('Panel.Booksv.PriceTest', [
            'response' =>$res->data->currency
        ]);
    }
    public function PriceCallector()
    {
        $client = new Client();
        $URI = Http::get('https://production.api.coindesk.com/v1/currency/ticker?currencies=BTC,ETH,LTC,XRP,BCH')->json();
        $response = json_encode($URI);
        $res = json_decode($response);

        return view('Panel.Booksv.price',[
            'response'=>$res->data->currency
        ]);
    }

    public function searchdata($search)
    {
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action' => 'query', 'qid' => '502', 'code' => $search);
        $response = $client->post($URI, $params);

        var_dump($response);
//        return view('Panel.Booksv.gavanin',[
//            'response'=> $json_decode,
//            'search'=>$search
//        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action' => 'query', 'qid' => '122', 'code' => $search);
        $response = $client->post($URI, $params);
        return view('Panel.Booksv.gavanin', [
            'response' => $response->getBody(),
            'search' => $request->get('search')
        ]);
    }


    public function khadamat(Request $request)
    {
        $id = $request->get('id');
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action' => 'query', 'qid' => '101', 'code' => $id);
        $response = $client->post($URI, $params);
        return view('Panel.Booksv.datakala', [
            'response' => $response->getBody()
        ]);
    }

    public function kala()
    {
        return view('Panel.Booksv.kala');
    }

    public function world($code)
    {
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action' => 'query', 'qid' => '21', 'code' => $code);
        $response = $client->post($URI, $params);
        return view('Panel.Booksv.gavanin', [
            'response' => $response->getBody()
        ]);
    }

    public function Erth()
    {
        return view('Panel.Booksv.Erth');
    }

    public function bazarhayemontakhab()
    {
        return view('Panel.Booksv.bazarhayemontakhab');
    }

    public function otaghayebazargani()
    {
        return view('Panel.Booksv.otaghayebazargani');
    }

    public function paygahetelaresani()
    {
        return view('Panel.Booksv.paygah_etelati_sherkathaye_modiriat_saderat');
    }

    public function etehadie()
    {
        return view('Panel.Booksv.createjson');
    }

    public function index()
    {
        if (auth()->user()) {
            return redirect(route('users.dashboard'));
        }
        return redirect(route('users.index'));

    }

    public function Game()
    {
        return view('Panel.Game.index');
    }

    public function data()
    {
        return view('Panel.Booksv.gavanin', [
            'response' => null
        ]);
    }

    public function naiim()
    {
        return view('Panel.Amarsaderat.create');
    }


}
