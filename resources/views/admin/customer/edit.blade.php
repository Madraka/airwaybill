@extends('admin.layouts.app')
@section('title','Edit Customer')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Customer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Customers</a></li>
                    <li class="breadcrumb-item active">Edit Customer</li>
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
                <h3 class="card-title">Edit Customer</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                @include('admin.layouts.formerror')
                <form role="form" action="{{ route('customer.update', ['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Customer Name:</label>
                        <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Customer Email:</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" required>
                    </div>
                    <div class="form-group d-none">
                        <input type="text" name="role_id" value="3">
                    </div>


                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Customer Address:</label>
                        @foreach($customers as $customer)
                        <input type="text" name="address" value="{{$customer->address}}" class="form-control" required>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="phone">Customer Phone:</label>
                        @foreach($customers as $customer)
                        <input type="text" name="phone" value="{{$customer->phone}}" class="form-control" required>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="number">Reference Number:</label>
                        @foreach($customers as $customer)
                        <input type="number" name="reference_no" value="{{$customer->reference_no}}" class="form-control" required>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-success">Update Customer</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
    <!-- /.content -->
</section>

@endsection