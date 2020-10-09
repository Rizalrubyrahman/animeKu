@extends('layouts.master')

@section('title','Ubah Kategori')

@section('content')
     <section class="content-header">
          <h1>
               Kategori
          </h1>
          <ol class="breadcrumb">
               <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
               <li><a href="{{ url('/admin/kategori') }}"> Kategori</a></li>
               <li><a href="{{ url('/admin/kategori/'.$kategori->id.'/edit') }}">Ubah Kategori</a></li>
          </ol>
     </section>

     <section class="content">
          <div class="row">
               <div class="col-md-6">
                    <!-- Default box -->
               <div class="box">
                    <div class="box-header">
                         <h3>Ubah Kategori</h3>
                    </div>
                    <div class="box-body">
                         <form action="{{ url('/admin/kategori/'.$kategori->id) }}" method="post">
                              @csrf
                              @method('put')
                              @include('admin.category.partials.form')
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
