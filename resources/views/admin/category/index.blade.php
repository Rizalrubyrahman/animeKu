@extends('layouts.master')

@section('title','Kategori')

@section('content')
     <section class="content-header">
          <h1>
               Kategori
          </h1>
          <ol class="breadcrumb">
               <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
               <li><a href="{{ url('/admin/kategori') }}"> Kategori</a></li>
          </ol>
     </section>

     <section class="content">

          <!-- Default box -->
               <div class="box">
                    <div class="box-header">
                         <h3>Data Kategori</h3>
                    </div>
                    <div class="box-body">
                         <div class="row" style="padding-bottom: 20px;">
                              <div class="col-md-9">
                                   <a href="{{ url('/admin/kategori/create') }}" class="btn btn-primary"> Tambah Kategori</a>
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
                                             <th>Nama</th>
                                             <th class="text-center">Opsi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @forelse ($categories as $category)
                                        <tr>
                                             <td class="text-center">{{ $loop->iteration }}</td>
                                             <td>{{ $category->name }}</td>
                                             <td class="text-center">
                                                  <a href="{{ url('/admin/kategori/'.$category->id.'/edit') }}" class="btn btn-sm btn-warning"><i style="color:white;" class="fa fa-pencil"></i></a>
                                                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#category{{ $category->id }}">
                                                       <i class="fa fa-trash"></i>
                                                  </button>
                                                  @include('admin.category.partials.modal')
                                             </td>
                                        </tr>
                                        @empty
                                        
                                        @endforelse
                                   </tbody>
                              </table>
                         </div>
                         <div class="row">
                              <div class="col-xs-9">
                                   {{ $categories->links() }}
                              </div>
                         </div>
                    </div>
               </div>
          
          <!-- /.box -->
     
     </section>
@endsection
