<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\UserController;
use App\Models\Level;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Setting;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Morilog\Jalali\Jalalian;
use SoapClient;
use Yajra\DataTables\DataTables;

define('URL_PAYMENT', 'https://api.idpay.ir/v1.1/payment');
define('URL_INQUIRY', 'https://api.idpay.ir/v1.1/payment/inquiry');
define('URL_VERIFY', 'https://api.idpay.ir/v1.1/payment/verify');

define('APIKEY', '3a0c8ad1-aa6d-4784-a0a8-c6da18696baf');
define('SANDBOX', false);

class PaymentController extends UserController
{


    protected $MerchantID = 'e30ac804-5f1c-4a97-990e-8560ecaacf14';

    function __construct()
    {
        parent::__construct();
    }


    function buy(Request $request)
    {
        $product = Product::where("id", $request->id)->first();

//        $Description = "خرید سکه";  // Required
//        $Mobile = $this->data->user->phone; // Optional
//        $CallbackURL = route("pay.back");  // Required
//
//        // URL also can be ir.zarinpal.com or de.zarinpal.com
//        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
//
//        $result = $client->PaymentRequest([
//            'MerchantID' => $this->MerchantID,
//            'Amount' => $product->price,
//            'Description' => $Description,
//            'Mobile' => $Mobile,
//            'CallbackURL' => $CallbackURL,
//        ]);

        //Redirect to URL You can do it also by creating a form
//        if ($result->Status == 100) {
//
//            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
//        } else {
//            return $result->Status;
//        }
        $payment = new Payment();
        $payment->amount = $product->price*10;
        $payment->u_id = $this->data->user->id;
        $payment->authority = " ";
        $payment->status = 0;
        $payment->p_id = $product->id;
        $payment->created_time = time();
        $payment->save();
        $params = array(
            'order_id' => $payment->id,
            'amount' => $payment->amount,
            'phone' => "0" . $this->data->user->phone,
            'name' => $this->data->user->name,
            'desc' => 'شارژ کیف پول',
            'callback' => route("pay.back"),
        );
        $header = array(
            'Content-Type: application/json',
            'X-API-KEY:' . APIKEY,
            'X-SANDBOX:' . SANDBOX,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, URL_PAYMENT);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($ch);
        curl_close($ch);

$result=json_decode($result);
        if (empty($result) || empty($result->link)) {
            Session::flash('error', 'فروشگاه در حال حاضر فعال نمیباشد بعدا دوباره امتحان کنید');
            return redirect()->route("user.shop");

        }


        //.Redirect to payment form
        header('Location:' . $result->link);


    }



    function payTime(Request $request)
    {
        $res = json_decode($this->buyTime($request));
        if ($this->data->user->inventory >= $res->amount) {
            $this->data->user->inventory -= $res->amount;
            $this->data->user->gameover = false;
            $this->data->user->save();
            $levels = UserLevel::where("u_id", $this->data->user->id)->get();

            foreach ($levels as $level) {
                if ($level->status == "loss") {
                    $level->status = "started";
                    $level->start_time = time();
                    $level->end_time = time() + (24 * 3600);
                    $level->save();
                    $quiz = Quiz::where("l_id", $level->l_id)->where("u_id", $level->u_id)->first();
                    if ($quiz) {
                        $mData = json_decode($level->getLevelVal());

                        $questions = Question::where("level", $level->getLevel())->inRandomOrder()->limit($mData->count)->get();
                        $quiz->questions = json_encode($questions);
                        $quiz->answers = "[]";
                        $quiz->created_time = time();
                        $quiz->status = "pending";
                        $quiz->save();
                    }
                }
            }


            return json_encode(array(
                "status" => "OK:1",
            ));
        } else {
            return json_encode(array(
                "status" => "ERROR:-1",
            ));
        }
    }

    function payLevel(Request $request)
    {
        $res = json_decode($this->nextLevel($request));
        if ($this->data->user->inventory >= $res->amount) {
            $this->data->user->inventory -= $res->amount;
            $this->data->user->last_level++;
            $this->data->user->last_next_use=time();
            $this->data->user->save();


            $levels = Level::where("number", $this->data->user->last_level)->get();

            foreach ($levels as $level) {
                $userLevel = new UserLevel();
                $userLevel->start_time = time();
                $userLevel->end_time = time() + (24 * $level->day * 3600);
                $userLevel->status = "started";
                $userLevel->l_id = $level->id;
                $userLevel->u_id = $this->data->user->id;
                $userLevel->save();
                $quiz = Quiz::where("ul_id", $userLevel->id)->first();
                if ($quiz) {
                    $quiz->delete();
                }
            }

            return json_encode(array(
                "status" => "OK:1",
            ));
        } else {
            return json_encode(array(
                "status" => "ERROR:-1",
            ));
        }
    }

    function buyTime(Request $request)
    {
        $pricePerItem = Setting::where("field_name", "buyLevelTime")->first()->value;

        $levels = UserLevel::where("u_id", $this->data->user->id)->get();
        $count = 0;
        foreach ($levels as $level) {
            if ($level->status == "loss") {
                $count++;
            }
        }
        $percent=30;
        for ($i = 0; $i < $this->data->user->gameover_count; $i++) {
            $pricePerItem += ($pricePerItem * $percent / 100);
            $percent=$percent-($percent*15/100);
            if ($percent<5){
                $percent=5;
            }
        }
        if($pricePerItem>1000){
            $pricePerItem=1000;
        }
        return json_encode(array(
            "status" => "OK:1",
            "amount" => intval($pricePerItem * $count)
        ));

    }

    function nextLevel(Request $request)
    {
        $last_next_use=$this->data->user->last_next_use;
        if ($last_next_use==null or $last_next_use==""){
            $last_next_use=-1;
        }
        if ((time()-$last_next_use)<24*3600){
            return json_encode(array(
                "status" => "ERROR:-1"
            ));
        }

        $price = 0;
        $levels = DB::table("user_levels")->select("user_levels.*", "levels.number","levels.next_price")
            ->join("levels", "levels.id", "=", "user_levels.l_id")->where("number", $this->data->user->last_level)->where("u_id", $this->data->user->id)->get();
        $win = true;
        foreach ($levels as $level) {
            if ($level->status != "win") {
                $win = false;
            } else {
                $percentOfEvent=($level->event_time-$level->start_time)*100/($level->end_time-$level->start_time);

                if ($percentOfEvent<25){
                    $price+=($level->next_price*30/100);

                }
                elseif ($percentOfEvent>=25 and $percentOfEvent<50){
                    $price+=($level->next_price*60/100);

                }elseif ($percentOfEvent>=50 and $percentOfEvent<75){
                    $price+=($level->next_price*80/100);


                }elseif ($percentOfEvent>=75){
                    $price+=$level->next_price;
                }
            }
        }
        if (!$win) {
            return json_encode(array(
                "status" => "ERROR:-1"
            ));
        } else {

            return json_encode(array(
                "status" => "OK:1",
                "amount" => intval($price)
            ));
        }
    }
}
