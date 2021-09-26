<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subfooter extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function footers()
    {
        return $this->belongsToMany(Footer::class);
    }
    public function HasSubFooter(): bool
    {
        return $this->footers()->where('subfooter_id',$this->id)->exists();
    }
}
