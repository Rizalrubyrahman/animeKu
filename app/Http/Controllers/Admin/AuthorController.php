<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = User::orderBy('name', 'ASC')->paginate(10);

        return view('admin.author.index',compact('authors'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $author)
    {
        return view('admin.author.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $author)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            
        ]);

        if($request->hasFile('image')){
            $image = request()->file('image')->store('image');

            \File::delete('storage/'.$author->image);
        }else{
            $image = $author->image;
        }

        $attr = $request->all();
        $attr['image'] = $image;

        $author->update($attr);

        alert()->success('Berhasil', 'Author telah di ubah');
        return redirect('/admin/author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $author)
    {
        \Storage::delete($author->image);
        $author->delete();

        alert()->success('Berhasil', 'Author telah di Hapus');
        return redirect('/admin/author');
    }
}
