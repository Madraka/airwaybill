@extends('admin.layouts.app')
@section('title','Edit Manifest')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Manifest</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Manifest</a></li>
                    <li class="breadcrumb-item active">Edit Manifest</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{ route('manifest.update', ['id'=> $manifest->id ]) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Mainfest</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="flight_no">Flight No:</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="flight_no" value="{{$manifest->flight_no}}" class="form-control" type="text" required>
                                </div>
                            </div>
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
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-plus"></i>Select Your AWB </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>AWB</th>
                                            <th>From</th>
                                            <th>To</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($manifest->shipments as $shipment)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="shipment" value="$shipment->id">
                                            </td>
                                            <td>{{$shipment->awb_no}}</td>
                                            <td>{{$shipment->shipper_name}}</td>
                                            <td>{{$shipment->receiver_name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success float-sm-right" type="submit">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</form>
</section>
<!-- /.content -->
@endsection