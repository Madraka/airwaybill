@extends('admin.layouts.app')
@section('title','Services')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Services</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <a type="button" class="btn  btn-success float-sm-right" href="{{ route('service.create') }}"> Add Services</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-hover dataTable no-footer">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>

                                    <td>Win 95+</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            <button type="button" class="btn btn-success"><i class="fa fa-print"></i></button>
                                            <button type="button" class="btn btn-info"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="card-body">
                              <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                   <div class="dataTables_length" id="datatable_length">
                                        <label for="">Show
                                             <select name="datatable_length" aria-controls="datatable" id="">
                                                  <option value="10">10</option>
                                                  <option value="20">20</option>
                                                  <option value="50">50</option>
                                             </select>
                                             entries
                                        </label>
                                        
                                   </div>
                              </div>
                              <div id="datatable_filter" class="datatable_filter float-sm-right">
                                   <label for="">Search
                                        <input type="search" class="" aria-controls="datatable">
                                   </label>
                              </div>
                         </div> -->
                </div>
            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection