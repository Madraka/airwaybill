@extends('admin.layouts.app')
@section('title')
  Setting
@endsection
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Setting</li>
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
                <h3 class="card-title">Update Settings</h3>
              </div>      
              @include('admin.layouts.formerror')    
                <div class="card-body">
                <form role="form" class="form" action="{{ route('setting.update',['id' => $setting->id]) }}" method="post"
                              enctype="multipart/form-data">
                              @csrf
                <div class="form-group">
                                   <label for="company_logo">Logo:</label>
                                   <input type="file" name="company_logo" class="form-control">
                               <img src="{{ asset('/assets/images/settings/'. $setting->company_logo) }}" alt="logo" style="width: 150px; height:auto;">
                              </div>
                              <div class="form-group">
                                   <label for="favicon">Favicon:</label>
                                   <input type="file" name="favicon" class="form-control">
                                   <img src="{{ asset('/assets/images/settings/' . $setting->favicon) }}" alt="favicon" style="width: 150px; height:auto;">
                              </div>                
                  <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" name="company_name" value="{{ $setting->company_name }}">
                  </div>
                  <div class="form-group">
                    <label for="company_description">Company Description</label>
                    <textarea name="company_description" id="summernote" rows="5" class="form-control">
                                   {{ $setting->company_description }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="company_email">Company Email</label>
                    <input type="email" class="form-control" name="company_email" value="{{ $setting->company_email }}">
                  </div>
                  <div class="form-group">
                    <label for="company_address">Company Address</label>
                    <input type="text" class="form-control" name="company_address" value="{{ $setting->company_address }}">
                  </div>
                  <div class="form-group">
                    <label for="company_phone">Company Phone</label>
                    <input type="text" class="form-control" name="company_phone" value="{{ $setting->company_phone }}">
                  </div>
                  <div class="form-group">
                    <label for="company_mobile">Company Mobile</label>
                    <input type="text" class="form-control" name="company_mobile" value="{{ $setting->company_mobile }}">
                  </div>
                  <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <textarea name="copyright" id="summernote2" rows="5" class="form-control">
                                   {{ $setting->copyright }}</textarea>
                  </div>
                  <button type="submit" class="btn btn-success">Update Site</button>
                  </form> 
           </div>
          
          </div>
         </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection