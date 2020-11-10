@extends('layouts.master')

@section('title','Author')

@section('content')
     <section class="content-header">
          <h1>
               Author
          </h1>
          <ol class="breadcrumb">
               <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
               <li><a href="{{ url('/admin/author') }}"> Author</a></li>
          </ol>
     </section>

     <section class="content">
 
          <!-- Default box -->
               <div class="box">
                    <div class="box-header">
                         <h3>Data Author</h3>
                    </div>
                    <div class="box-body">
                         <div class="row" style="padding-bottom: 20px;">
                              <div class="col-md-3">
                                   <input type="text" id="search" class="form-control" placeholder="Cari Kategori">
                              </div>
                         </div>
                         <div class="table-responsive">
                              <table class="table table-striped">
                                   <thead>
                                        <tr>
                                             <th class="text-center">No</th>
                                             <th>Nama</th>
                                             <th>Email</th>
                                             <th>Deskripsi</th>
                                             <th class="text-center">Gambar</th>
                                             <th class="text-center">Opsi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @forelse ($authors as $author)
                                        <tr>
                                             <td class="text-center">{{ $loop->iteration }}</td>
                                             <td>{{ $author->name }}</td>
                                             <td>{{ $author->email }}</td>
                                             <td>{{ $author->description }}</td>
                                             <td class="text-center"><img style="height:100px; width:100px; " src="{{ $author->getImage() }}"></td>
                                             <td style="width: 100px; line-height: 100px;" class="text-center">
                                                  <a  href="{{ url('/admin/author/'.$author->id.'/edit') }}" class="btn btn-sm btn-warning"><i style="color:white;" class="fa fa-pencil"></i></a>
                                                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#author{{ $author->id }}">
                                                       <i class="fa fa-trash"></i>
                                                  </button>
                                                  @include('admin.author.partials.modal')
                                             </td>
                                        </tr>
                                        @empty
                                             <td>Tidak ada Author</td>
                                        @endforelse
                                   </tbody>
                              </table>
                         </div>
                         <div class="row">
                              <div class="col-xs-9">
                                   {{ $authors->links() }}
                              </div>
                         </div>
                    </div>
               </div>
          
          <!-- /.box -->
     
     </section>
@endsection
