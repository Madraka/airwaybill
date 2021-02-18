@extends('admin.layouts.app')
@section('title','Edit Country')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Country</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Countries</a></li>
                    <li class="breadcrumb-item active">Edit Country</li>
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
                <h3 class="card-title">Edit Country</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form class="form" method="post" action="{{ route('country.update',['id'=> $country->id]) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country Name*:</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Country Name" value="{{ $country->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country Code*:</label>
                                <input class="form-control" type="text" name="code" id="code" placeholder="Eg. US/UK/CAD" value="{{ $country->code }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
    <!-- /.content -->
</section>

@endsection