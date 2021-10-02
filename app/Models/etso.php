<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etso extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function subetsos()
    {
        return subetso::query()->where('etso_id',$this->id)->get();
    }

    public function avgsubetso()
    {
        return subetso::query()->where('etso_id',$this->id)->count();
    }
}
