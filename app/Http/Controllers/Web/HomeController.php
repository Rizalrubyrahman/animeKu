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
      $articles = Article::latest()->get();
      $populer = Article::orderBy('view', 'DESC')->take(4)->get();
     
      return view('front.index',compact('articles', 'categories', 'populer'));
   }

   public function detail(Article $article)
   {
      $no = 0;
      $article->update([
         'view' => $article->view + 1
      ]);
      

      $populer = Article::orderBy('view', 'DESC')->take(4)->get();
      $articles = Article::all();
      $categories = Category::all();
      return view('front.detail',compact('article','categories', 'articles', 'populer'));
   }

   public function category(Category $category){
      $articles = Article::orderBy('id', 'DESC')->where('category_id', $category->id)->get();
      $categories = Category::all();
      $populer = Article::orderBy('view', 'DESC')->take(4)->get();
      return view('front.category', compact('category','articles','categories','populer'));
   }
}
