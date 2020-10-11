<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['category_id','title','body','image'];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function getImage()
    {
        return asset('storage/'.$this->image);
    }
}
