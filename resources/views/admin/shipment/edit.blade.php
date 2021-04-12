@extends('admin.layouts.app')
@section('title', 'Edit Shipments')
@section('style')
<style>
    .card-body{
        padding:10px;
        font-size: 14px;
    }
    .card-title{
        font-size:15px;
        font-weight: 500;
    }
    .card-header{
        padding:7px;
    }
    .w-58{
        width:58%;
    }
    .form-group label{
        font-weight: 400 !important;
    }
</style>
@endsection
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
                        <li class="breadcrumb-item active">Edit Shipment</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @include('admin.layouts.formerror')
            <form class="form" method="post" action="{{ route('shipment.store') }}">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Edit Shipment</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="account_number">Select Customer</label>
                                    <select name="customer_id" class="form-control select2" style="width: 100%;" onchange="getref(value)">
                                        <option value="">--Choose Customer--</option>
                                        @foreach($customers as $customer)
                                        <option value="{{$customer->customer->id}}" {{ $shipment->customer_id == $customer->customer->id ? 'selected' : '' }}>{{$customer->name}}</option>
                                        @endforeach   
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Customer Reference:</label>
                                    <input class="form-control" type="text" name="customer_reference"
                                        id="customer_reference" placeholder="Customer Reference" readonly="readonly" value="{{ $shipment->customer_reference }}">
                                </div>
                                <!-- /.form-group -->

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="awb_no">AWB No.</label>
                                    <input class="form-control w-58" name="awb_no" type="text" value="{{ $shipment->awb_no }}">
                                </div>
                                <div class="form-group clearfix">
                                    <div class="row">
                                        @foreach ($services as $key=>$service)
                                            <div class="col-md-4">
                                                <div class="icheck-primary d-inline">
                                                    <input id="service_id" type="radio" name="service_id"
                                                        value="{{ $service->id }}" onchange="getAwb({{ $service->id }})" @if (!$key) {!! "checked" !!} @endif>
                                                    <label for="service_id">{{ $service->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach

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
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipper_name">Name:</label>
                                            <input class="form-control w-90" type="text" name="shipper_name" id="shipper_name" value="{{ $shipment->shipper_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_address">Address:</label>
                                            <input class="form-control w-90" type="text" name="shipper_address"
                                                id="shipper_address" value="{{ $shipment->shipper_address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_phone">Phone:</label>
                                            <input class="form-control w-90" type="text" name="shipper_phone"
                                                id="shipper_phone" value="{{ $shipment->shipper_phone }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="shipper_country">Country</label>
                                            <select name="shipper_country" class="form-control select2 w-90"
                                                style="width: 100%;">
                                                <option>--Choose Country--</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}" {{ $shipment->shipper_country ==  $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipper_contact_person">Contact Person Name:</label>
                                            <input class="form-control w-90" type="text" name="shipper_contact_person"
                                                id="shipper_contact_person" value="{{ $shipment->shipper_contact_person }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_city">City:</label>
                                            <input class="form-control w-90" type="text" name="shipper_city" id="shipper_city"  value="{{ $shipment->shipper_city }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_state">State/Provinence:</label>
                                            <input class="form-control w-90" type="text" name="shipper_state" id="shipper_state" value="{{ $shipment->shipper_state }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_postcode">Post/Zipcode:</label>
                                            <input class="form-control w-90" type="text" name="shipper_postcode"
                                                id="shipper_postcode" value="{{ $shipment->shipper_postcode }}">
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
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="receiver_name">Name:</label>
                                            <input class="form-control w-90" type="text" name="receiver_name" id="receiver_name" value="{{ $shipment->receiver_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_address">Address:</label>
                                            <input class="form-control w-90" type="text" name="receiver_address"
                                                id="receiver_address" value="{{ $shipment->receiver_address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_phone">Phone:</label>
                                            <input class="form-control w-90" type="text" name="receiver_phone"
                                                id="receiver_phone" value="{{ $shipment->receiver_phone }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="receiver_country">Country</label>
                                            <select name="receiver_country" class="form-control select2 w-90"
                                                style="width: 100%;">
                                                <option>--Choose Country--</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}" {{ $shipment->receiver_country ==  $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="receiver_contact_person">Contact Person Name:</label>
                                            <input class="form-control w-90" type="text" name="receiver_contact_person"
                                                id="receiver_contact_person" value="{{ $shipment->receiver_contact_person }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_city">City:</label>
                                            <input class="form-control w-90" type="text" name="receiver_city" id="receiver_city" value="{{ $shipment->receiver_city }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_state">State/Provinence:</label>
                                            <input class="form-control w-90" type="text" name="receiver_state"
                                                id="receiver_state" value="{{ $shipment->receiver_state }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_postcode">Post/Zipcode:</label>
                                            <input class="form-control w-90" type="text" name="receiver_postcode"
                                                id="receiver_postcode" value="{{ $shipment->receiver_postcode }}">
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
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control w-90" rows="5" type="text" name="goods_description" id="goods_description">{{ $shipment->goods_description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">DECLARED VALUE FOR CUSTOM</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    <input name="declared_value_for_custom" class="form-control w-90" type="text"
                                        placeholder="USD. 956.00" value="{{ $shipment->declared_value_for_custom }}">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Size & Weight</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
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
                                    <td><input name="pieces" class="form-control w-90" type="number" value="{{ $shipment->pieces }}" /></td>
                                    <td><input name="kilograms" class="form-control w-90" type="number" value="{{ $shipment->kilograms }}"/></td>
                                    <td><input name="grams" class="form-control w-90" type="number" value="{{ $shipment->grams }}"/></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Dimension</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table dataTable table-bordered" id="myTable">
                            <tbody>
                                <tr>
                                    <td>SN</td>
                                    <td>Length</td>
                                    <td>Breadth</td>
                                    <td>Height</td>
                                </tr>
                                {{-- <tr>
                                    <td><input name="pieces" class="form-control" type="number" /></td>
                                    <td><input name="length[]" class="form-control" type="number" /></td>
                                    <td><input name="weight" class="form-control" type="number" /></td>
                                    <td><input name="height" class="form-control" type="number" /></td>
                                </tr> --}}
                            </tbody>
                        </table>
                        <button id="add-row" type="button">Add row</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success float-sm-right">Add</button>
                    </div>
                </div>
                <!-- /.row -->
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
@section('script')
<script>
    var service_id = $('input[name="service_id"]:checked').val();
    getAwb(service_id)
    function getAwb(id) {
       $.ajax({
          type:'GET',
          url:'/admin/awb/'+id,
          success:function(data) {
              $('input[name="awb_no"]').val(data)  
          }
       });
    }
 </script>
 <script>
      function getref(cusId){
         $.ajax({
          type:'GET',
          url:'/admin/cus_ref/'+cusId,
          success:function(data) {
              $('input[name="customer_reference"]').val(data) 
          }
       });
      }
 </script>
@endsection

