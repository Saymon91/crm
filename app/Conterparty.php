<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conterparty extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
