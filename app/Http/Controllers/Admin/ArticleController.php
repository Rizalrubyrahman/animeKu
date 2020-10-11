<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('title', 'ASC')->paginate(10);

        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.article.create',['artikel' => new Article(),'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:3'],
            'category_id' => ['required'],
            'image' => ['required']
        ]);

        $image = request()->file('image')->store('image');
        

        $attr = $request->all();
        $attr['title'] = \Str::slug($request->title);
        $attr['image'] = $image;

        $article = Article::create($attr);
        
        if($article){
            alert()->success('Berhasil', 'Article telah di tambahkan');
            return redirect('/admin/artikel');
        }else{
            alert()->error('Gagal', 'Artikel gagal di tambahkan');
            return redirect()->back();
        }

    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $artikel)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.article.edit', compact('artikel', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $artikel)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'body' => ['required', 'min:3'],
            'category_id' => ['required'],
        ]);

        if($request->hasFile('image')){
            $image = request()->file('image')->store('image');
            //hapus foto seblumnya jika di update
            \File::delete('storage/'.$artikel->image);
        }else{
            $image = $artikel->image;
        }

        $attr = $request->all();
        $attr['title'] = \Str::slug($request->title);
        $attr['image'] = $image;

        $artikel->update($attr);

        alert()->success('Berhasil', 'Artikel telah di ubah');
        return redirect('/admin/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $artikel)
    {
        \Storage::delete($artikel->image);
        $artikel->delete();

        alert()->success('Berhasil', 'Artikel telah di hapus');
        return redirect('/admin/artikel');
    }
}
