<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Tag, Category, Article};
use DB;

class HomeController extends Controller
{
   public function index()
   {
      $categories = Category::all();
      $articles = Article::all();
      $tags = Tag::where('category_id')->get();
      $new = Article::latest()->first();
      $news = Article::latest()->skip(1)->take(2)->get();
      $recents = Article::latest()->skip(3)->take(4)->get();

      
     
      return view('front.index',compact('articles','categories','tags','news','new','recents'));
   }
}
