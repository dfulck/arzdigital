<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    public $timestamps = false;

    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

    }

    function getSubject()
    {
        $level = Level::where("id", $this->l_id)->first();
        if ($level) {
            return $level->subject;
        } else {
            return "";
        }
    }

    function getLevelVal()
    {
        $level = Level::where("id", $this->l_id)->first();
        return $level->data;


    }

    function getTypeString()
    {
        $level = Level::where("id", $this->l_id)->first();

        switch ($level->type) {

            case "1":
                return "جواب به آزمون";
            case "2":
                return "ایجاد هدف";
            case "3":
                return "ایجاد لیست کاربر";
            case "4":
                return "معرفی کاربر به مجموعه خود";

        }
    }
    function getLevel(){
        $level = Level::where("id", $this->l_id)->first();
        return $level->number;
    }
    function getStatusText(){
        $str="<br>";

        switch ($this->status){
            case "started":
                $str.="شروع شده و در انتظار انجام";
                return $str;
            case "loss":
                $str.="شما این مرحله را نتوانستید رد کنید";
                return $str;
            case "win":
                $str.="با موفقیت انجام دادید";
                return $str;
        }
    }
    function getStatus(){

        switch ($this->status){
            case "started":
                return 0;
            case "loss":
                return -1;
            case "win":
                return 1;
        }
    }
}
