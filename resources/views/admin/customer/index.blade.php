@extends('admin.layouts.app')
@section('title','Add Customer')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Customers</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Customer</li>
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
                        <a type="button" class="btn  btn-success float-sm-right" href="{{ route('customer.create') }}"> Add Customer</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-hover dataTable no-footer">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Address</th>
                                    <th>Customer Phone</th>
                                    <th>Reference Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->customer ==null ?'' :$customer->customer->address }}</td>
                                    <td>{{ $customer->customer ==null ?'' :$customer->customer->phone }}</td>
                                    <td>{{ $customer->customer ==null ?'' :$customer->customer->reference_no }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('customer.edit', $customer) }}" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('customer.destroy',$customer) }}" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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