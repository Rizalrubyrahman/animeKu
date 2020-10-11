@extends('layouts.master')

@section('title','Ubah Artikel')

@section('content')
     <section class="content-header">
          <h1>
               Artikel
          </h1>
          <ol class="breadcrumb">
               <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
               <li><a href="{{ url('/admin/artikel') }}"> Artikel</a></li>
               <li><a href="{{ url('/admin/artikel/'.$artikel->id.'/edit') }}">Ubah Artikel</a></li>
          </ol>
     </section>

     <section class="content">
          <div class="row">
               <div class="col-md-6">
                    <!-- Default box -->
               <div class="box">
                    <div class="box-header">
                         <h3>Ubah Artikel</h3>
                    </div>
                    <div class="box-body">
                         <form action="{{ url('/admin/artikel/'.$artikel->id) }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                              @include('admin.article.partials.form')
                              <div class="form-group">
                                   <button type="submit" class="btn btn-warning">Ubah</button>
                              </div>
                         </form>
                    </div>
               </div>
          
          <!-- /.box -->
               </div>
          </div>
     </section>
@endsection
