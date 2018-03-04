<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
}
