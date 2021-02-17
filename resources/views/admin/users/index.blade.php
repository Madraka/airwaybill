@extends('admin.layouts.app')
@section('title')
Users
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
          <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                         <li class="breadcrumb-item active">Users</li>
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
                              <h3 class="card-title">Users</h3>
                              <a class="float-right btn btn-success" href="{{route('user.create')}}">Create</a>
                         </div>
                         <div class="card-body">
                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>Image</th>
                                             <th>Name</th>
                                             <th>Role</th>
                                             <th>Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        @if($users->count()>0)
                                        @foreach($users as $user)
                                        <tr>
                                             <td>
                                                  <img src="" alt="{{ $user->id }}" width="50px" height="50px" style="border-radius: 50%;">
                                             </td>
                                             <td>
                                                  {{ $user->name }}
                                             </td>
                                             <td>
                                                  @if( $user->role_id == 1)
                                                  <p>Admin</p>
                                                  @endif
                                                  @if( $user->role_id == 2)
                                                  <p>Staff</p>
                                                  @endif
                                                  @if( $user->role_id == 3)
                                                  <p>Customer</p>
                                                  @endif
                                             </td>
                                             <td>
                                                  @if(Auth::id() !== $user->id)
                                                  <div class="btn-group" role="group" aria-label="Basic example">
                                                       <a type="button" class="btn btn-primary" href="{{ route('user.edit',['id'=> $user->id])}}">Edit</a>
                                                       <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal-{{ $user->id }}"><i class="fas fa-trash"></i> Delete</a>
                                                  
                                                  </div>
                                                 
                                                  <!-- The Delete Modal -->
                                                  <div class="modal fade" id="delete-modal-{{ $user->id }}">
                                                       <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content text-center">
                                                                 <!-- Modal body -->
                                                                 <div class="modal-body ">
                                                                      <h5 class="mb-4">Do you want to delete User permanently?</h5>
                                                                      <a class="btn btn-danger" href="{{ route('user.destroy',$user->id) }}">Yes</a>
                                                                      <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                                                                 </div>

                                                            </div>
                                                       </div>
                                                  </div>
                                                  @endif

                                             </td>

                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                             <td colspan="5" class="text-center">
                                                  <h3> No Users</h3>
                                             </td>
                                        </tr>
                                        @endif


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