<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
