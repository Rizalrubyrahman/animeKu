@extends('layouts.master')

@section('title','Artikel')

@section('content')
     <section class="content-header">
          <h1>
               Artikel
          </h1>
          <ol class="breadcrumb">
               <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
               <li><a href="{{ url('/admin/artikel') }}"> Artikel</a></li>
          </ol>
     </section>

     <section class="content">

          <!-- Default box -->
               <div class="box">
                    <div class="box-header">
                         <h3>Data Artikel</h3>
                    </div>
                    <div class="box-body">
                         <div class="row" style="padding-bottom: 20px;">
                              <div class="col-md-9">
                                   <a href="{{ url('/admin/artikel/create') }}" class="btn btn-primary"> Tambah Artikel</a>
                              </div>
                              <div class="col-md-3">
                                   <input type="text" id="search" class="form-control" placeholder="Cari Kategori">
                              </div>
                         </div>
                         <div class="table-responsive">
                              <table class="table table-striped">
                                   <thead>
                                        <tr>
                                             <th class="text-center">No</th>
                                             <th>Judul</th>
                                             <th>Deskripsi</th>
                                             <th>Kategori</th>
                                             <th class="text-center">Gambar</th>
                                             <th class="text-center">Opsi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @forelse ($articles as $article)
                                        <tr>
                                             <td style="line-height:100px;" class="text-center">{{ $loop->iteration }}</td>
                                             <td style="line-height:100px;">{{ $article->title }}</td>
                                             <td style="line-height:100px;">{{ $article->body }}</td>
                                             <td style="line-height:100px;">{{ $article->categories->name }}</td>
                                             <td class="text-center"><img style="height:100px; width:100px; " src="{{ $article->getImage() }}"></td>
                                             <td style="line-height:100px;" class="text-center">
                                                  <a  href="{{ url('/admin/artikel/'.$article->id.'/edit') }}" class="btn btn-sm btn-warning"><i style="color:white;" class="fa fa-pencil"></i></a>
                                                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#article{{ $article->id }}">
                                                       <i class="fa fa-trash"></i>
                                                  </button>
                                                  @include('admin.article.partials.modal')
                                             </td>
                                        </tr>
                                        @empty
                                             <td>Tidak ada Artikel</td>
                                        @endforelse
                                   </tbody>
                              </table>
                         </div>
                         <div class="row">
                              <div class="col-xs-9">
                                   {{ $articles->links() }}
                              </div>
                         </div>
                    </div>
               </div>
          
          <!-- /.box -->
     
     </section>
@endsection
