<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * @param $title
     * @return mixed
     */

    public static function findByTitle($title)
    {
        return self::query()->whereTitle($title)->firstOrFail();

    }

    public function HasPermission($permission): bool
    {
        $parameter =Permission::query()->where('title',$permission)->firstOrFail();

        return $this->Permissions()->where('id',$parameter->id)->exists();
    }
    public function CountPermission()
    {
       return $this->permissions()->where('Role_id',$this->id)->count();
    }

}
