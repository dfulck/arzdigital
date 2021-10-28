<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use SoapClient;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data;

    function __construct()
    {
        $this->data = new \stdClass();
    }

    protected function myHash($text, $random = false)
    {
        $hash = md5($text . sha1($text) . md5($text));
        if ($random) {
            $hash = md5($hash . time() . sha1(time() . $hash));
        }
        return $hash;
    }

    protected function validatePhone($phone)
    {
        if (!is_numeric($phone)) {
            return false;
        }
        $phone = str_replace("۱", "1", $phone);
        $phone = str_replace(" ", "", $phone);
        $phone = str_replace("۰", "0", $phone);
        $phone = str_replace("۲", "2", $phone);
        $phone = str_replace("۳", "3", $phone);
        $phone = str_replace("۴", "4", $phone);
        $phone = str_replace("۵", "5", $phone);
        $phone = str_replace("۶", "6", $phone);
        $phone = str_replace("۷", "7", $phone);
        $phone = str_replace("۸", "8", $phone);
        $phone = str_replace("۹", "9", $phone);
        $phone = str_replace("+98", "", $phone);
        if (strlen($phone) > 12 and strlen($phone) < 10) {
            return false;
        }

        $f = substr($phone, 0, 1);
        $phone = substr($phone, 1);

        if ($f == "0") {
            $f = "";
        }
        return $f . $phone;
    }

    protected function validPass($password)
    {
        $password = str_replace("۱", "1", $password);
        $password = str_replace(" ", "", $password);
        $password = str_replace("۰", "0", $password);
        $password = str_replace("۲", "2", $password);
        $password = str_replace("۳", "3", $password);
        $password = str_replace("۴", "4", $password);
        $password = str_replace("۵", "5", $password);
        $password = str_replace("۶", "6", $password);
        $password = str_replace("۷", "7", $password);
        $password = str_replace("۸", "8", $password);
        $password = str_replace("۹", "9", $password);

        return $password;
    }
    protected function sendSms($phone,$text){
        ini_set("soap.wsdl_cache_enabled", "0");
        $sms_client = new SoapClient('http://webservice.0098sms.com/service.asmx?wsdl', array('encoding'=>'UTF-8'));
        $parameters['username'] = "vsms5737";
        $parameters['password'] = "09350861207alirezaA";
        $parameters['mobileno'] = $phone;
        $parameters['pnlno'] = "30005367";
        $parameters['text'] =$text;
        $parameters['isflash'] =false;
        return $sms_client->SendSMS($parameters)->SendSMSResult;
    }
    protected function subsetUsers($user){
        $subsets=User::where("parent_id",$user->id)->get();
        $counter=[];
        foreach ($subsets as $subset){
            $counter[]=$subset;
        }
        if (count($subsets)>0){

            foreach ($subsets as $subset){
                $sus=$this->subsetUsers($subset);
                if ($sus!=null){
                    foreach ($sus as $su){

                        $counter[]=$su;
                    }
                }

            }
            return $counter;
        }
        else{
            return null;
        }
    }
    function createPassword($count){
        $charArray=array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
            "A","B","C","D","E","F","G","H","J","K","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        $newPass="";

        for ($i=0;$i<$count;$i++){
            $newPass.=$charArray[rand(0,count($charArray)-2)];
        }
        return $newPass;
    }
}
