@extends('admin.layouts.app')
@section('title','Edit Service')
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
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form class="form" method="post" action="{{ route('service.update',['id'=>$service->id]) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Service Name*:</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                           placeholder="Service Name" value="{{ $service->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Awb Number</label>
                                    <br>
                                    @foreach($service->awb as $awb_list)
                                        {{--<option value="{{$awb_list->service_id}}">{{$awb_list->awb_number}}</option>--}}
                                        <input type="text" value="{{$awb_list->awb_number}}" name="awb_number[]" required class="form-control">
                                        <br>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.content -->
    </section>

@endsection