<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['article_id','parent_id','username','comment'];

    public function child()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
