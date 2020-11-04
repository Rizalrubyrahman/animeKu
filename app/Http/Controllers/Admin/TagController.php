<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Tag, Category};

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('category_id')->paginate(10);
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.tag.create',['tag' => new Tag(), 'categories' => $categories]);
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
            'name' => 'required',
            'category_id' => 'required'
        ]);

        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->name);

        $tag = Tag::create($attr);

        if($tag){
            alert()->success('Berhasil', 'Tag telah di tambahkan');
            return redirect('/admin/tag');
        }else{
            alert()->error('Gagal', 'Tag gagal di tambahkan');
            return redirect('/admin/tag/create');
        }
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $categories = Category::all();
        return view('admin.tag.edit', compact('tag', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->name);

        $tag->update($attr);

        alert()->success('Berhasil', 'Tag telah di ubah');
        return redirect('/admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        alert()->success('Berhasil', 'Tag telah di hapus');
        return redirect('/admin/tag');
    }
}
