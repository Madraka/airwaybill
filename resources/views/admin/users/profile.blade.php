@extends('admin.layouts.app')
@section('title')
Update Profile
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Profile</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item"><a href="#">Users</a></li>
                         <li class="breadcrumb-item active">Update Profile</li>
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
                              <h3 class="card-title">Update Profile</h3>
                         </div>
                         @include('admin.layouts.formerror')
                         <form role="form" action="{{ route('user.profile.update') }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                    
                              <div class="form-group">
                                   <label for="name">Name*:</label>
                                   <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
                              </div>
                              <div class="form-group">
                                   <label for="email">Email:</label>
                                   <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                              </div>
                              <div class="form-group">
                                   <label for="oldpassword">Old Password:</label>
                                   <input type="password" name="oldpassword" class="form-control" required>
                              </div>
                              <div class="form-group">
                                   <label for="password">Password:</label>
                                   <input type="password" name="password" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="confirmpassword">ConfirmPassword:</label>
                                   <input type="password" name="confirmpassword" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="avatar">Avatar:</label>
                                   <input type="file" name="avatar" class="form-control">
                                   <img src="{{ asset('assets/images/users/' . $user->profile->avatar) }}" alt="{{ $user->name }}" style="width: 150px; height:auto;">

                              </div>
   
                              <div class="form-group">
                                   <label for="facebook">Facebook:</label>
                                   <input type="url" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="youtube">Youtube:</label>
                                   <input type="url" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="about">About:</label>
                                   <textarea name="about" id="summernote" rows="5" class="form-control">
                                   {!! $user->profile->about !!}
                                   </textarea>
                              </div>
                             
                              <button type="submit" class="btn btn-success">Update</button>
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