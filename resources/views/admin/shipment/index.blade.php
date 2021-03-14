@extends('admin.layouts.app')
@section('title','Shipments')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Shipment</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Shipment</li>
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
            <button onclick="print()" class="btn btn-warning ml-2 float-sm-right">Test Print</button>
            <a type="button" class="btn  btn-success float-sm-right" href="{{ route('shipment.create') }}"> Add Shipment</a>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-hover dataTable no-footer">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>AWB No.</th>
                  <th>Customer Reference</th>
                  <th>Service</th>
                  <th>From(Shipper)</th>
                  <th>To(Receiver)</th>
                  <th>Description of Goods</th>
                  <th>Value</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($shipments as $shipment)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $shipment->awb_no }}</td>
                  <td>{{ $shipment->customer_reference }}</td>
                  <td>{{ $shipment->service->name }}</td>
                  <td>
                    <ul>
                      <li>Name: {{ $shipment->shipper_name }}</li>
                      <li>Contact Person: {{ $shipment->shipper_contact_person }}</li>
                      <li>Address: {{ $shipment->shipper_address }}, {{ $shipment->shipper_city }}, {{ $shipment->shipper_country }}</li>
                      <li>State/Provience: {{ $shipment->shipper_state }}</li>
                      <li>Post Code: {{ $shipment->shipper_postcode }}</li>
                      <li>Phone: {{ $shipment->shipper_phone }}</li>
                     
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>Name: {{ $shipment->receiver_name }}</li>
                      <li>Contact Person: {{ $shipment->receiver_contact_person }}</li>
                      <li>Address: {{ $shipment->receiver_address }}, {{ $shipment->receiver_city }}, {{ $shipment->receiver_country }}</li>
                      <li>State/Provience: {{ $shipment->receiver_state }}</li>
                      <li>Post Code: {{ $shipment->receiver_postcode }}</li>
                      <li>Phone: {{ $shipment->receiver_phone }}</li>
                     
                    </ul>
                  </td>
                  <td>{{ $shipment->goods_description }}</td>
                  <td>{{ $shipment->declared_value_for_custom }}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-primary">Edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                      <button type="button" class="btn btn-success">Print</button>
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