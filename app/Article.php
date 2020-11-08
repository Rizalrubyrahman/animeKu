<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id','category_id','title','body','image','view','slug'];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function getImage()
    {
        return asset('storage/'.$this->image);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class )->whereNull('parent_id');
    }
}
