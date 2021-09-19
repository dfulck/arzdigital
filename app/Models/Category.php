<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }

    /**
     * @param Subcategory $subcategory
     * @return bool
     */

    public function HasSubCategory($subcategory): bool
    {
        $parameter =Subcategory::query()->where('title',$subcategory)->firstOrFail();

        return $this->subcategories()->where('id',$parameter->id)->exists();
    }

}
