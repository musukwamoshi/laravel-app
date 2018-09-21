<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function user()
    {
        //specify relationship between user and posts
        return $this->belongsTo('App\User');
    }
}
