<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create',['category' => new Category()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => ['required']]);

        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->name);

        $category = Category::create($attr);

        if($category){
            alert()->success('Berhasil','Kategori telah di tambahkan');
            return redirect('/admin/kategori');
        }else{
            alert()->error('Gagal','Kategori gagal di tambahkan');
            return redirect('/admin/kategori/create');
        }
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $kategori)
    {
        return view('admin.category.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $kategori)
    {
        $request->validate(['name' => ['required']]);

        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->name);

        $kategori->update($attr);

        if($kategori){
            alert()->success('Berhasil','Kategori telah di ubah');
            return redirect('/admin/kategori');
        }else{
            alert()->error('Gagal','Kategori gagal di ubah');
            return redirect('/admin/kategori/'.$kategori->id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kategori)
    {
        $kategori->delete();

        alert()->success('Berhasil','Kategori telah di hapus');
        return redirect('/admin/kategori');
    }
}
