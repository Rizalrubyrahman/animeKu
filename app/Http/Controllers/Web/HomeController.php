<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Category, Article, Comment};
use DB;

class HomeController extends Controller
{
   public function index()
   {
      $categories = Category::all();
      $articles = Article::latest()->paginate(10);
      $populer = Article::orderBy('view', 'DESC')->take(4)->get();
     
      return view('front.index',compact('articles', 'categories', 'populer'));
   }

   public function detail(Article $article)
   {
      $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
      //jika page di refresh jumlah view tiddak bertambah
      if(!$pageWasRefreshed ) {
         $article->update([
            'view' => $article->view + 1
         ]);
      }
      
      

      $populer = Article::orderBy('view', 'DESC')->take(4)->get();
      $articles = Article::all();
      $post = Article::with(['comments','comments.child'])->where('slug', $article->slug)->first();
      $count = Comment::where('article_id',$article->id)->count();
      $categories = Category::all();

      return view('front.detail',compact('article','categories', 'articles', 'populer','post','count'));
   }

   public function category(Category $category){
      $articles = Article::orderBy('id', 'DESC')->where('category_id', $category->id)->get();
      $categories = Category::all();
      $populer = Article::orderBy('view', 'DESC')->take(4)->get();
      return view('front.category', compact('category','articles','categories','populer'));
   }

   public function comment(Request $request)
   {
      $request->validate([
         'username' => 'required',
         'comment' => 'required'
      ]);

         Comment::create([
            'article_id' => $request->id,
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'username' => $request->username,
            'comment' => $request->comment
         ]);

         return redirect()->back();
   }
}
