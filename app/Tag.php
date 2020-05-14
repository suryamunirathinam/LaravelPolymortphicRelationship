<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];


    public function posts()
    {
        return $this->morphedByMany(Post::Class,'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany(Video::Class,'taggable');
    }
}
