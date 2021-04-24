@extends('admin.layouts.app')
@section('title','Showing Manifest')

@section('content')
<div class="container justify-content-center d-flex">
    <h1>Showing Manifest</h1><br>
</div>

<div class="justify-content-center">
    <h3>Flight No: {{$manifest->flight_no}}</h3><br>
    
    @foreach($manifest->shipments as $shipment)
        <h3>{{$shipment->shipper_name}}</h3><br>
        <h3>{{$shipment->receiver_name}}</h3>
        
    @endforeach

    
    
    <h2></h2>
</div>

@endsection