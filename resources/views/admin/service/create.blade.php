@extends('admin.layouts.app')
@section('title','Create Service')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Services Form</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Services</a></li>
               <li class="breadcrumb-item active">Add Services</li>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">
           <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Add Services</h3>    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                     
                       <div class="form-group">
                         <label>Services:</label>
                         <input class="form-control" type="text" name="services" id="services" placeholder="Services">                    
                       </div> 
                      <!-- /.form-group -->
                                          
                    </div>  
                                     
                    <!-- /.col -->
                  </div>
                </div>
                <!-- /.card-body -->          
           </div>          
           <div class="row">
             <div class="col-md-12">
               <button class="btn btn-success float-sm-right" data-toggle="modal" data-target="#exampleModal">Next</button>
             </div>
           </div>
         <!-- /.row -->
       </div>
    <!-- /.content -->
    </section>

@endsection