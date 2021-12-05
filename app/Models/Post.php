<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\True_;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function Hasquestion($question)
    {
        return $this->questions($question)->exists();
    }

    public function HasTag()
    {
        return $this->tags()->exists();
    }

    public function subcategories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Subcategory::class);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
    public function parts(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Part::class,'partable');
    }

    public function CountPart()
    {
       return $this->parts()->where('partable_id', $this->id)->count();
    }
}
