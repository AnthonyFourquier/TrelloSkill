<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function user()

    {
        return $this->belongsTo('App\Models\User');

    }

    public function cards()
    {
        return $this->hasMany('App\Models\Card');
    }
}
