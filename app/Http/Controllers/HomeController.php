<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Psr7\Stream;
use GuzzleHttp\Client;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class HomeController extends Controller
{
    public function PriceTest()
    {
        $client = new Client();
        $URI = Http::get('https://production.api.coindesk.com/v1/currency/ticker?currencies=BTC,ETH,LTC,XRP,BCH')->json();
        $response = json_encode($URI);
        $res = json_decode($response);
        return view('Panel.Booksv.PriceTest', [
            'response' => $res->data->currency
        ]);
    }

    public function PriceCallector()
    {
//        $URI = Http::get('https://production.api.coindesk.com/v1/currency/ticker?currencies=BTC,ETH,LTC,XRP,BCH')->json();
//        $response = json_encode($URI);
//        $res = json_decode($response);
        $client = new CoinGeckoClient();
        $data = $client->simple();
        $URL = Http::get('https://tejaratnews.com/api/v2/ajax/prices/instrument-price.php?id=17321&period=m&chart=line&token=e7579bbf62340c23')->json();
        $dollars = json_encode($URL);
        $jsondecode = json_decode($dollars);
        $count = count($jsondecode->data) - 1;
        $dollar = $jsondecode->data[$count]->meta->price;
        return view('Panel.Booksv.price', [
            'response' => $data,
            'dollar' => $dollar
        ]);
    }

    public function searchdata()
    {
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action=query&qid=261&trade_year=1400&trade_month=&table_6115_length=10&undefined=&draw=1&columns%5B0%5D%5Bdata%5D=0&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=true&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=1&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=2&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=3&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&order=1&start=0&length=10&search%5Bvalue%5D=&search%5Bregex%5D=false&order_dir=asc&search_value=');
        $response = $client->post($URI, $params);
        $dollars = json_encode($response);
        $jsondecode = json_decode($dollars);

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
        return view('Panel.Booksv.world', [
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
        return redirect(route('login'));

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