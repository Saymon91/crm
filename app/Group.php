<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_group', 'id', 'group_id');
    }

    public function privileges()
    {
        return $this->hasMany(Privilege::class, 'id', 'group_id');
    }
}
