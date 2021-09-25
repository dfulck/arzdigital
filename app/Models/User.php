<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @var array
     */
    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function massages(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Massage::class);
    }

    public static function RegisterUser($request)
    {
        $user = null;
        $otp = 1111;
        $userexsits = User::query()->where('email', $request->get('email'));
        if ($userexsits->exists()) {
            $user = $userexsits->first();
            $user->update([
                'password' => bcrypt($otp)
            ]);
        } else {
            $user = User::query()->create([
                'email' => $request->get('email'),
                'number' => $request->get('number'),
                'name' => $request->get('name'),
                'lastname' => $request->get('lastname'),
                'password' => bcrypt($otp),
                'role_id' => Role::FindByTitle('guest')->id,
            ]);
        }
        auth()->login($user);
        return $user;
    }
}
