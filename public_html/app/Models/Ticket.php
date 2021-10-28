<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public $timestamps=false;
    function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->status=1;

    }
    
}
