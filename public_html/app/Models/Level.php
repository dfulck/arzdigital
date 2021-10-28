<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    public $timestamps=false;
    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->type=0;

    }
    function getTypeString()
    {


        switch ($this->type) {

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
}
