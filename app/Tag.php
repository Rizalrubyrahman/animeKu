<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug', 'category_id'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
