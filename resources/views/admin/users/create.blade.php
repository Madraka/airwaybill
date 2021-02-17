@extends('admin.layouts.app')
@section('title')
Create User
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add User</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Users</a></li>
                         <li class="breadcrumb-item active">Add User</li>
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
                              <h3 class="card-title">Add User</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group">
                                   <label for="name">Name*:</label>
                                   <input type="text" id="name" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="email">Email*:</label>
                                   <input type="email" name="email" class="form-control" required>
                              </div>
                              <div class="form-group">
                                   <label for="role_id">Select User Role:</label>
                                   <select class="form-control" id="role_id" name="role_id" required>
                                        <option >--Select User Role--</option>
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="password">Password*:</label>
                                   <input type="password" name="password" class="form-control" required>
                              </div>
               
                              <button type="submit" class="btn btn-success">Add</button>
                         </form>
                    </div>
               </div>
          </div>
          <!-- /.row -->
     </div>
     <!--/. container-fluid -->
</section>
<!-- /.content -->
@endsection