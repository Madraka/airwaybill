@extends('admin.layouts.app')
@section('title')
Sliders
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sliders</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Sliders</li>
                    </ol>
               </div><!-- /.col -->
          </div><!-- /.row -->
     </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
     <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
               <div class="col-12">
                    <div class="card card-primary">
                         <div class="card-header">
                              <h3 class="card-title">Sliders</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.slider.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>SN</th>
                                             <th>Order</th>
                                             <th>Title</th>
                                             <th>Image</th>
                                             <th>Description</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($sliders as $slider)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $slider->order }}</td>
                                             <td>{{ $slider->title }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/sliders/' . $slider->image) }}" alt="{{ $slider->title }}" style="width: 150px; height:auto;">
                                             </td>
                                             <td>{!! $slider->description !!}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.slider.edit',['id' => $slider->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.slider.destroy',['id' => $slider->id]) }}">Delete</a>
                                             </td>
                                        </tr>
                                   @endforeach
                                   </tbody>
                              </table>
                         </div>

                    </div>
               </div>
          </div>
          <!-- /.row -->
     </div>
     <!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection