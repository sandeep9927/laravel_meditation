<?php

namespace App;

use App\Role;
use Gate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verifyToken', 'provider_id', 'status', 'image', 'role_id','banned_until',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $date = [
        'banned_until',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function profile()
    {
        return $this->hasOne('App\UserProfile');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public static function adminvalidate()
    {
        if (!Gate::allows('isAdmin')) {
            abort(404, 'soryy your not able access this page');
        }
    }
}
