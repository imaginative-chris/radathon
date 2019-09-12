<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveEvent extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
