<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
 
}
