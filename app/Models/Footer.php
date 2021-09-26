<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function subfooters()
    {
        return $this->belongsToMany(Subfooter::class);
    }

    public function TitleSubfooter()
    {
        return $this->subfooters()->get();
    }


}
