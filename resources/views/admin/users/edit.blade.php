@extends('admin.layouts.app')
@section('title')
Edit User
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit User</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Users</a></li>
                         <li class="breadcrumb-item active">Edit User</li>
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
                              <h3 class="card-title">Edit User</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form action="{{ route('user.update',['id'=> $user->id ]) }}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')

                              <div class="form-group">
                                   <label for="name">Name*:</label>
                                   <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                              </div>
                              <div class="form-group">
                                   <label for="email">Email*:</label>
                                   <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                              </div>
                              <div class="form-group">
                                   <label for="role_id">Select User Role:</label>
                                   <select class="form-control" id="role_id" name="role_id" required>
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>{{ $role->role }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <div class="form-group">
                                   <label for="password">Password*:</label>
                                   <input type="password" name="password" class="form-control" value="{{ $user->pass}}" required>
                              </div>
               
                              <button type="submit" class="btn btn-success">Edit Data</button>
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