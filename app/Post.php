<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title','text'
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag','posts_tags','id_post','id_tag');
    }
    public function getTagListAttribute()
    {
        $tagsName = $this->tags()->lists('name')->all();
        return implode(', ',$tagsName);
    }
}
