<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'username', 'email', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function conterparty()
    {
        return $this->hasOne(Conterparty::class, 'id', 'id');
    }

    public function privileges()
    {
        return $this->hasMany(Privilege::class, 'id', 'user_id');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'users_roles', 'id', 'user_id');
    }
}
