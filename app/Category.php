<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function article()
    {
        return $this->hasManyThrough(Article::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
