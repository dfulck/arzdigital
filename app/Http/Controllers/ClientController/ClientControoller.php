<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Amarsaderat;
use App\Models\Booksv;
use App\Models\etso;
use App\Models\Form;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Stream;
use GuzzleHttp\Client;
use App\Models\Category;
use App\Models\City;
use App\Models\Content;
use App\Models\Footer;
use App\Models\Kala;
use App\Models\leader;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use App\Models\Videocat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Integer;
use App\Models\link;

class ClientControoller extends Controller
{
    public function forgot(Request $request)
    {
        $otp = random_int(11111, 99999);
        $userexsits = User::query()->where('email', $request->get('email'));
        if ($userexsits->exists()) {
            $user = $userexsits->first();
            Mail::to($user->email)->send(new VerfryEmail($otp));
            session()->flash('success', "ایمیل بازیابی با موفقیت برای شما ارسال شد");
            $user->update([
                'password' => bcrypt($otp)
            ]);
        } else {
            session()->flash('error', "شما هنوز ثبت نام نکرده اید");
        }
        return redirect()->back();
    }
    public function show()
    {
        return view('client.User.show');
    }

    public function Search(Request $request)
    {
        if ($request->get('serachQuset') == null){
            return null;
        }

        $products = Post::query()->where('header', 'like', '%' . $request->get('serachQuset') . '%')AND Content::query()->where('header', 'like', '%' . $request->get('serachQuset') . '%')->get();

        return json_encode($products);
    }
    public function amarsaderat()
    {
        return view('client.date.amarsaderat',[
            'amarsaderats'=>Amarsaderat::all()
        ]);
    }

    public function esto()
    {
        return view('client.date.esto',[
            'etsos'=>etso::all()
        ]);
    }

    public function forms()
    {
        return view('client.date.forms',[
            'forms'=>Form::all()
        ]);
    }

    public function listketabha()
    {
        return view('client.date.listketabha',[
            'booksvs'=>Booksv::all()
        ]);
    }
    public function bazarhayemontakhab()
    {
        return view('client.date.bazarhayemontakhab');
    }

    public function otaghayebazargani()
    {
        return view('client.date.otaghayebazargani');
    }

    public function paygahetelaresani()
    {
        return view('client.date.paygah_etelati_sherkathaye_modiriat_saderat');
    }

    public function etehadie()
    {
        return view('client.date.etehadie');
    }

    public function serachgavanin(Request $request)
    {
        $search = $request->get('search');
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action' => 'query', 'qid' => '122', 'code' => $search);
        $response = $client->post($URI, $params);

        $client = new CoinGeckoClient();
        $data = $client->simple();
        $URL = Http::get('https://tejaratnews.com/api/v2/ajax/prices/instrument-price.php?id=17321&period=m&chart=line&token=e7579bbf62340c23')->json();
        $dollars = json_encode($URL);
        $jsondecode = json_decode($dollars);
        $count = count($jsondecode->data) - 1;
        $dollar = $jsondecode->data[$count]->meta->price;
        $new=str_replace(',','',$dollar);
        return view('client.dashboard.Home', [
            'BookSearch' => $response->getBody(),
            'response' => $data,
            'dollar' => $new,
        ]);
    }

    public function ArticalAll()
    {
        return view('client.dashboard.All_Artical', [
            'posts' => Post::all()
        ]);
    }

    public function TagArtical(Tag $tag)
    {
        return view('client.dashboard.Tag_artical', [
            'tag' => $tag
        ]);
    }

    public function NewsAll()
    {
        return view('client.dashboard.News_All', [
            'contents' => Content::all(),
            'leaders' => leader::all()
        ]);
    }

    public function ShowLeader(leader $leader)
    {
        return view('client.dashboard.LeaderShow', [
            'contents' => Content::query()->where('leader_id', $leader->id)->get(),
            'leade' => $leader,
            'leaders' => leader::all()
        ]);
    }

    public function ShowPost(Post $post)
    {
        return view('client.dashboard.SignalPost', [
            'post' => $post,
            'tags' => Tag::all(),
            'leaders' => leader::all(),
            'questions'=>Question::query()->where('status','1')->get()
        ]);

    }

    public function ShowArtical(Content $content)
    {
        return view('client.dashboard.singel_Artical', [
            'content' => $content,
            'tags' => Tag::all(),
            'leaders' => leader::all()
        ]);
    }

    public function calector()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple();
        $URL = Http::get('https://tejaratnews.com/api/v2/ajax/prices/instrument-price.php?id=17321&period=m&chart=line&token=e7579bbf62340c23')->json();
        $dollars = json_encode($URL);
        $jsondecode = json_decode($dollars);
        $count = count($jsondecode->data) - 1;
        $dollar = $jsondecode->data[$count]->meta->price;
        return view('client.dashboard.calector', [
            'response' => $data,
            'dollar' => $dollar
        ]);
    }

    public function VideoAll()
    {
        return view('client.dashboard.VideoAll', [
            'videos' => Video::all()
        ]);

    }

    public function SingelVideo(Videocat $videocat)
    {
        return view('client.dashboard.singelVideocat', [
            'videos' => Video::query()->where('videocat_id', $videocat->id)->get(),
            'videocat' => $videocat
        ]);
    }

    public function world($code)
    {
        $client = new Client();
        $URI = 'https://tpo.ir/inc/ajax.ashx';
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = array('action' => 'query', 'qid' => '21', 'code' => $code);
        $world = $client->post($URI, $params);
        return view('client.date.world',[
            'response'=>$world->getBody()
        ]);
//        return Redirect::back()->with('world','asdasdasdasjdnsfhsdjfghafhafusasdfuhn');

    }
}
