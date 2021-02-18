@extends('admin.layouts.app')
@section('title','Countries')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Countries</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Countries</li>
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
                        <a type="button" class="btn  btn-success float-sm-right" href="{{ route('country.create') }}"> Add Country</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-hover dataTable no-footer">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Country Code</th>
                                    <th>Country Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($countries as $country)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $country->code }}</td>
                                    <td>{{ $country->name }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('country.edit',['id'=>$country->id]) }}" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('country.destroy',['id'=>$country->id]) }}" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection