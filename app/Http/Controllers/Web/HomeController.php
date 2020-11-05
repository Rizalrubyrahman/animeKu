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
      $recents = Article::latest()->skip(3)->take(4)->get();

      
     
      return view('front.index',compact('articles','categories','news','new','recents'));
   }
}
