<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $timestamps=false;
    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->answers=["","","",""];
        $this->true_answer=1;
    }
}
