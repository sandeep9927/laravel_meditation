<?php

namespace App;

use App\Role;
use App\Technique;
use Gate;
use Cache;
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

    public function technique() {
  
        return $this->hasMany(Technique::class);
     
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','user_id');
    }

    public function isOnline(){
        return Cache::has('user-is-online-'. $this->id);
    }
}
