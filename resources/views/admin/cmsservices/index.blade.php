@extends('admin.layouts.app')
@section('title')
CMS Services
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">CMS Services</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">CMS Services</li>
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
                              <h3 class="card-title">CMS Services</h3>
                              <a class="float-right btn btn-success" href="{{route('admin.cmsservice.create')}}">Create</a>
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
                                   @foreach($services as $service)
                                        <tr>
                                             <td>{{$loop->iteration}}</td>
                                             <td>{{ $service->order }}</td>
                                             <td>{{ $service->title }}</td>
                                             <td>
                                             <img src="{{ asset('assets/images/cmsservices/' . $service->image) }}" alt="{{ $service->title }}" style="width: 150px; height:auto;">
                                             </td>
                                             <td>{!! $service->description !!}</td>
                                             <td>
                                                  <a class="btn btn-sm btn-info" href="{{ route('admin.cmsservice.edit',['id' => $service->id]) }}">Edit</a>
                                                  <a class="btn btn-sm btn-danger" href="{{ route('admin.cmsservice.destroy',['id' => $service->id]) }}">Delete</a>
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