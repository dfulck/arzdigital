<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function contents()
    {
        return $this->belongsToMany(Content::class);

    }

    public function HasNumberContent(): int
    {
        return Content::query()->where('leader_id',$this->id)->count();
   }

}
