<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'email','name','comment','post_id'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
