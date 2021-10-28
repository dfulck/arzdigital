<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Quiz;
use App\Models\Target;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Morilog\Jalali\Jalalian;
use function Clue\StreamFilter\fun;
define('URL_PAYMENT', 'https://api.idpay.ir/v1.1/payment');
define('URL_INQUIRY', 'https://api.idpay.ir/v1.1/payment/inquiry');
define('URL_VERIFY', 'https://api.idpay.ir/v1.1/payment/verify');

define('APIKEY', '3a0c8ad1-aa6d-4784-a0a8-c6da18696baf');
define('SANDBOX', false);
class ApiController extends Controller
{


    function checker(Request $request)
    {
        file_put_contents("crontester.txt",Jalalian::forge(time())->format("Y-m-d---H:i:s"));
        $users = User::where("started", true)->get();
        for ($i = 0; $i < count($users); $i++) {

            $user = $users[$i];


            $levels = UserLevel::where("u_id", $user->id)->where(function ($query) {
                return $query->where("status", "started");
            })->get();
            for ($j = 0; $j < count($levels); $j++) {
                $level = $levels[$j];
                if ($level->status == "started" and $level->end_time < time()) {
                    $this->typeChecker($user, $level);
                }
                $quiz = Quiz::where("ul_id", $level->id)->first();
                if ($quiz and $quiz->status=="started") {
                    if ($quiz->end_time<time()){
                        $quiz->status="loss";
                        $quiz->save();

                        $level->status = "loss";
                        $level->event_time = time();
                        $level->save();
                        if (!$user->gameover){
                            $user->gameover=true;
                            $user->gameover_count++;
                        }
                        $user->save();
                    }
                }

            }
            $levels = DB::table("user_levels")
                ->select("user_levels.*", "levels.number", "levels.type")
                ->join("levels", "user_levels.l_id", "=", "levels.id")
                ->where("u_id", $user->id)->where("number", $user->last_level)->where("end_time", "<", time())->get();
            if (count($levels) > 0) {
                $loss = false;
                foreach ($levels as $level) {
                    if ($level->status == "loss") {
                        $loss = true;
                        break;
                    }

                }
                if (!$loss) {
                    $ulevels = UserLevel::where("u_id", $user->id)->get();

                    foreach ($ulevels as $ulevel) {
                       $ulevel->status="win";
                       $ulevel->save();
                    }

                    $user->gameover=false;

                    $user->last_level++;
                    $user->save();
                    $levels = Level::where("number", $user->last_level)->get();

                    foreach ($levels as $level) {
                        $userLevel = new UserLevel();
                        $userLevel->start_time = time();
                        $userLevel->end_time = time() + (24 * 3600 * $level->day);
                        $userLevel->status = "started";
                        $userLevel->l_id = $level->id;
                        $userLevel->u_id = $user->id;
                        $userLevel->save();
                    }
                }
            }

        }


        $users = User::all();
        foreach ($users as $user) {
            if ($user->last_level>=3 and $user->isVerify and ($user->ref_id == null or $user->ref_id=="")) {
                while ($ref = $this->createPassword(8)) {
                    $oU = User::where("ref_id", $ref)->first();
                    if (!$oU) {
                        break;
                    }
                }
                $user->ref_id = $ref;
                $user->save();
            }
        }


    }

    function typeChecker($user, $level)
    {
        $l = Level::where("id", $level->l_id)->first();
        $type = $l->type;

        if ($type == 1) {
            $quiz = Quiz::where("ul_id", $level->id)->where("u_id", $user->id)->first();
           if (!$quiz){
               if (!$user->gameover){
                   $user->gameover=true;
                   $user->gameover_count++;
               }

               $user->save();
               $level->status = "loss";
               $level->event_time = time();
               $level->save();
               return;
           }
            $answers = json_decode($quiz->answers);
            if ($quiz->answers != "" and $quiz->answers != null and count($answers) > 0) {

                $trueCount = 0;
                $questions = json_decode($quiz->questions);
                foreach ($questions as $question) {
                    foreach ($answers as $answer) {
                        if ($question->id == $answer->q_id) {
                            if(isset($answer) and $answer!=null and isset($answer->answer)){
                                if ($question->true_answer . "" == $answer->answer . "") {
                                    $trueCount++;
                                }
                            }


                            break;
                        }
                    }
                }
                $grade = intval($trueCount * 100 / count($questions));
                $quiz->grade = $grade;
                $quiz->trueCount = $trueCount;

                if ($grade > 60) {
                    $quiz->status = "win";

                    $level->status = "win";
                    $level->event_time = time();
                    $level->save();
                } else {
                    $quiz->status = "loss";
                    if (!$user->gameover){
                        $user->gameover=true;
                        $user->gameover_count++;
                    }
                    $user->save();
                    $this->data->user->save();
                    $level->status = "loss";
                    $level->event_time = time();
                    $level->save();
                }
                $quiz->save();
            } else {
                $quiz->status = "loss";
                $quiz->save();
                if (!$user->gameover){
                    $user->gameover=true;
                    $user->gameover_count++;
                }

                $user->save();
                $level->status = "loss";
                $level->event_time = time();
                $level->save();
            }


        } elseif ($type == 2) {
            $targetsCount = Target::where("u_id", $user->id)->count();
            if ($targetsCount >= intval($l->data)) {
                $level->status = "win";
            } else {
                $level->status = "loss";
                if (!$user->gameover){
                    $user->gameover=true;
                    $user->gameover_count++;
                }
                $user->save();
            }
            $level->event_time = time();
            $level->save();
            return;
        } elseif ($type == 3) {
            $userListsCount = UserList::where("u_id", $user->id)->count();
            if ($userListsCount >= intval($l->data)) {
                $level->status = "win";

            } else {
                if (!$user->gameover){
                    $user->gameover=true;
                    $user->gameover_count++;
                }
                $user->save();
                $level->status = "loss";
            }
            $level->event_time = time();
            $level->save();
            return;
        } elseif ($type === 4) {
            $data = json_decode($l->data);
            $subsetUsers = User::where("parent_id", $user->id)->get();
            $rightSubsets = [];
            $leftSubsets = [];
            if (isset($subsetUsers[0])) {
                $rightSubsets = $this->subsetUsers($subsetUsers[0]);
                $rightSubsets[]=$subsetUsers[0];
            }
            if (isset($subsetUsers[1])) {
                $leftSubsets = $this->subsetUsers($subsetUsers[1]);
                $leftSubsets[]=$subsetUsers[1];

            }
            $targetRightLevelCount = 0;

            foreach ($rightSubsets as $rightSubset) {
                if ($rightSubset->last_level >= $data->right1->level) {
                    $targetRightLevelCount++;
                }
            }
            if ($targetRightLevelCount >= $data->right1->count) {
                $right = true;
            } else {
                $targetRightLevelCount = 0;

                foreach ($rightSubsets as $rightSubset) {
                    if ($rightSubset->last_level >= $data->right2->level) {
                        $targetRightLevelCount++;
                    }
                }
                if ($targetRightLevelCount >= $data->right2->count) {
                    $right = true;
                } else {
                    if (!$user->gameover){
                        $user->gameover=true;
                        $user->gameover_count++;
                    }
                    $user->save();
                    $level->status = "loss";
                    $level->event_time = time();
                    $level->save();

                    return;
                }
            }

            $targetLeftLevelCount = 0;

            foreach ($leftSubsets as $leftSubset) {
                if ($leftSubset->last_level >= $data->left1->level) {
                    $targetLeftLevelCount++;
                }
            }
            if ($targetLeftLevelCount >= $data->left1->count) {
                $left = true;
            } else {
                $targetLeftLevelCount = 0;

                foreach ($leftSubsets as $leftSubset) {
                    if ($leftSubset->last_level >= $data->left2->level) {
                        $targetLeftLevelCount++;
                    }
                }
                if ($targetLeftLevelCount >= $data->left2->count) {
                    $left = true;
                } else {
                    if (!$user->gameover) {
                        $user->gameover = true;
                        $user->gameover_count++;
                    }
                    $user->save();
                    $level->status = "loss";
                    $level->event_time = time();
                    $level->save();

                    return;
                }
            }

            $level->status = "win";
            $level->event_time = time();
            $level->save();
            return;

        }

    }

    function subsetCounter($user)
    {
        $subsets = User::where("parent_id", $user->id)->get();
        $counter = 0;
        if (count($subsets) > 0) {
            $counter += count($subsets);
            foreach ($subsets as $subset) {
                $counter += $this->subsetCounter($subset);
            }
            return $counter;
        } else {
            return 0;
        }
    }

    function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $fileName = md5(time()) . '.' . request()->file->getClientOriginalExtension();

        request()->file->move('files', $fileName);

        return response()->json(['url' => "files/$fileName"]);

    }

    function uploadImage(Request $request)
    {


        $data = $request->input("file");
        $image_array_1 = explode(";", $data);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $output = "image-" . time() . ".png";

        file_put_contents("uploads/images/" . $output, $data);
        $data = array(
            'image' => $output
        );
        return response(json_encode($data));


    }
    function idpay_payment_get_inquiry(Request $request)
    {

        $header = array(
            'Content-Type: application/json',
            'X-API-KEY:' . APIKEY,
            'X-SANDBOX:' . SANDBOX,
        );

        $params = array(
            'id' => $request->id,
            'order_id' => $request->order_id
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, URL_INQUIRY);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result);

        if (empty($result) ||
            empty($result->status)) {
            return $result->status;
        }


        return $result->status;

    }


    /**
     * @param array $response
     * @return bool
     */
    function idpay_payment_verify(Request $request)
    {

        $header = array(
            'Content-Type: application/json',
            'X-API-KEY:' . APIKEY,
            'X-SANDBOX:' . SANDBOX,
        );

        $params = array(
            'id' => $request->id,
            'order_id' => $request->order_id,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, URL_VERIFY);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result);

        if (empty($result) ||
            empty($result->status)) {


            return FALSE;
        }
        return $result->status;
    }

    /**
     * @param int $status
     * @return string
     */

    function paymentBack(Request $request)
    {

        if (
            !$request->has("status") or
            !$request->has("id") or
            !$request->has("track_id") or
            !$request->has("order_id")
        ) {


            return redirect()->route("user.shop",["status"=>0]);


        }

        if ($request->status != 10) {
            return redirect()->route("user.shop",["status"=>0]);
        }

// if $response['id'] was not in the database return FALSE
        $payment = Payment::where('id', $request->order_id)->first();
        if (!$payment) {
            return redirect()->route("user.shop");
        }
        $product = Product::where("id", $payment->p_id)->first();

        $inquiry = $this->idpay_payment_get_inquiry($request);


        if ($inquiry==10) {
            $verify = $this->idpay_payment_verify($request);
            if (($verify==100 or $verify==101) and $payment->status!=1){
                $payment->ref_id = "-";
                $payment->status = 1;
                $payment->save();
                $user = User::where("id", $payment->u_id)->first();
                $user->inventory += $product->amount;
                $user->save();

                return redirect()->route("user.shop",["status"=>1]);
            }
            else{
                return redirect()->route("user.shop",["status"=>1]);

            }
        }
        return redirect()->route("user.shop",["status"=>0]);


//        $Authority = $request->input('Authority');
//        $status = $request->input("Status");
//
//        if ($status == 'OK') {
//            $payment = Payment::where('authority', $Authority)->first();
//            $product = Product::where("id", $payment->p_id)->first();
//
//            if ($payment) {
//                $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
//                $result = $client->PaymentVerification([
//                    'MerchantID' => $this->MerchantID,
//                    'Authority' => $Authority,
//                    'Amount' => $payment->amount,
//                ]);
//                if ($result->Status == 100 and $payment->status != 1) {
//
//                    $payment->ref_id = "-";
//                    $payment->status = 1;
//                    $payment->save();
//
//
//                    $user = User::where("id", $payment->u_id)->first();
//                    $user->inventory += $product->amount;
//                    $user->save();
//
//                    Session::flash('ok', "کاربر عزیز خرید شما با موفقیت انجام شد و تعداد " . $product->amount . " سکه به کاربری شما اضافه شد");
//
//
//                }
//            } else {
//                Session::flash('error', 'عملیات خرید به مشکل برخورد');
//
//            }
//
//        } else {
//            Session::flash('error', 'کاربر عزیز پرداخت شما معتبر نیست در صورتی که از حسابتان کسر شده دوباره به حساب شما از طرف بانک برگشت داده میشود.');
//        }
//
//
//        return redirect()->route("user.shop");
    }


}
