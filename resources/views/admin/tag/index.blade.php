@extends('layouts.master')

@section('title','Tag')

@section('content')
     <section class="content-header">
          <h1>
               Tag
          </h1>
          <ol class="breadcrumb">
               <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
               <li><a href="{{ url('/admin/tag') }}"> Tag</a></li>
          </ol>
     </section>

     <section class="content">

          <!-- Default box -->
               <div class="box">
                    <div class="box-header">
                         <h3>Data Tag</h3>
                    </div>
                    <div class="box-body">
                         <div class="row" style="padding-bottom: 20px;">
                              <div class="col-md-9">
                                   <a href="{{ url('/admin/tag/create') }}" class="btn btn-primary"> Tambah Tag</a>
                              </div>
                              <div class="col-md-3">
                                   <input type="text" id="search" class="form-control" placeholder="Cari Tag">
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
                                        @forelse ($tags as $tag)
                                        <tr>
                                             <td class="text-center">{{ $loop->iteration }}</td>
                                             <td>{{ $tag->name }}</td>
                                             <td class="text-center">
                                                  <a href="{{ url('/admin/tag/'.$tag->id.'/edit') }}" class="btn btn-sm btn-warning"><i style="color:white;" class="fa fa-pencil"></i></a>
                                                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#tag{{ $tag->id }}">
                                                       <i class="fa fa-trash"></i>
                                                  </button>
                                                  @include('admin.tag.partials.modal')
                                             </td>
                                        </tr>
                                        @empty
                                             <td>Tidak Ada Tag</td>
                                        @endforelse
                                   </tbody>
                              </table>
                         </div>
                         <div class="row">
                              <div class="col-xs-9">
                                   {{ $tags->links() }}
                              </div>
                         </div>
                    </div>
               </div>
          
          <!-- /.box -->
     
     </section>
@endsection
