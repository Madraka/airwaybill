@extends('admin.layouts.app')
@section('title','Shipments')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Shipment Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Shipment</a></li>
                    <li class="breadcrumb-item active">Add Shipment</li>
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
                <h3 class="card-title">Add Shipment</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Account Number:</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Choose Account</option>
                                <option>12344</option>
                                <option>444</option>
                                <option>444</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Customer Reference:</label>
                            <input class="form-control" type="text" name="customer-reference" id="customer-reference" placeholder="Customer Reference">
                        </div>
                        <!-- /.form-group -->

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">AWB No.</label>
                            <input class="form-control" type="text" value="3362218565">
                        </div>
                        <div class="form-group clearfix">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="class=" icheck-primary d-inline"">
                                        <input id="document" type="checkbox" name="" id="">
                                        <label for="document">Express Document</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="class=" icheck-primary d-inline"">
                                        <input id="parcel" type="checkbox" name="" id="">
                                        <label for="parcel">Express Parcel</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-plus"></i>FROM Shippers</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input class="form-control" type="text" name="shipper-name" id="shipper-name">
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input class="form-control" type="text" name="shipper-address" id="shipper-address">
                                </div>
                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input class="form-control" type="number" name="shipper-number" id="shipper-number">
                                </div>

                                <div class="form-group">
                                    <label>Country:</label>
                                    <input class="form-control" type="text" name="shipper-country" id="shipper-country">
                                </div>
                                <!-- /.form-group -->

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Person Name:</label>
                                    <input class="form-control" type="text" name="contact_person_name" id="receiver-name">
                                </div>
                                <div class="form-group">
                                    <label>City:</label>
                                    <input class="form-control" type="text" name="shipper-city" id="shipper-city">
                                </div>
                                <div class="form-group">
                                    <label>State/Provinence:</label>
                                    <input class="form-control" type="text" name="shipper-state" id="shipper-state">
                                </div>
                                <div class="form-group">
                                    <label>Post/Zipcode:</label>
                                    <input class="form-control" type="text" name="shipper-zipcode" id="shipper-zipcode">
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-plus"></i> TO Receiver</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input class="form-control" type="text" name="receiver-name" id="receiver-name">
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input class="form-control" type="text" name="receiver-address" id="receiver-address">
                                </div>
                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input class="form-control" type="number" name="receiver-number" id="receiver-number">
                                </div>

                                <div class="form-group">
                                    <label>Country:</label>
                                    <input class="form-control" type="text" name="receiver-country" id="receiver-country">
                                </div>
                                <!-- /.form-group -->

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Person Name:</label>
                                    <input class="form-control" type="text" name="contact-person-name" id="receiver-name">
                                </div>
                                <div class="form-group">
                                    <label>City:</label>
                                    <input class="form-control" type="text" name="receiver-city" id="receiver-city">
                                </div>
                                <div class="form-group">
                                    <label>State/Provinence:</label>
                                    <input class="form-control" type="text" name="receiver-state" id="receiver-state">
                                </div>
                                <div class="form-group">
                                    <label>Post/Zipcode:</label>
                                    <input class="form-control" type="text" name="receiver-zipcode" id="receiver-zipcode">
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Description Of Goods</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            WOOLEN, PAPER AND HANDICRAFT GOODS OF NEPAL
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">DECLARED VALUE FOR CUSTOM</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            <input class="form-control" type="text" value="USD. 956.00">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Size & Weight</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table class="table dataTable table-bordered">
                <tbody>
                    <tr>
                        <td>No. Of Pieces</td>
                        <td>Kilograms</td>
                        <td>Grams</td>
                    </tr>
                    <tr>
                        <td>i2</td>
                        <td><input class="form-control" type="text" /></td>
                        <td><input class="form-control" type="text" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Dimension</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table class="table dataTable table-bordered" id="myTable">
                <tbody>
                    <tr>
                        <td>No. Of Pieces</td>
                        <td>Length</td>
                        <td>Breadth</td>
                        <td>Height</td>
                    </tr>
                    <tr>
                        <td>i2</td>
                        <td><input class="form-control" type="text" /></td>
                        <td><input class="form-control" type="text" /></td>
                        <td><input class="form-control" type="text" /></td>
                    </tr>
                </tbody>
            </table>
            <button id="add-row">Add row</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success float-sm-right" data-toggle="modal" data-target="#exampleModal">Next</button>
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection