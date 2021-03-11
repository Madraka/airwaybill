@extends('admin.layouts.app')
@section('title','AWB')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Generate Awb Number</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Awb</li>
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
                    <div class="card-body">
                       
                        <form action="/admin/generate-awb" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Enter Awb Number</label>
                                        <input class="form-control" type="text" value="" name="awb[]" id="awb" placeholder="Awb Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-info">Add More Numbers</button>
                                </div>
                                <button type="submit" class="ml-2 mt-5 btn btn-success">Generate</button>
                                <!-- /.col -->
                            </div>
                            
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection