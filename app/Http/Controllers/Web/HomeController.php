<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Category, Article};
use DB;

class HomeController extends Controller
{
   public function index()
   {
      $categories = Category::all();
      $articles = Article::orderBy('created_at', 'DESC')->get();
      $new = Article::latest()->first();
      $news = Article::latest()->skip(1)->take(2)->get();
      $recents1 = Article::latest()->skip(3)->take(2)->get();
      $recents2 = Article::latest()->skip(5)->take(2)->get();
      $beritas = Article::groupBy('category_id')->get();
     
      return view('front.index',compact('articles','categories','news','new','recents1','recents2','beritas'));
   }
}
