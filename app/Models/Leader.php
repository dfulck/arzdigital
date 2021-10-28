<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\content;

class leader extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function contents()
    {
        return $this->belongsToMany(content::class);

    }

    public function HasNumberContent(): int
    {
        return content::query()->where('leader_id',$this->id)->count();
   }


}
