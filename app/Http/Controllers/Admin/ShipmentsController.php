<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Awb;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Dimension;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Service;
use App\User;

class ShipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipments = Shipment::orderBy('id', 'desc')->get();
        return view('admin.shipment.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $countries = Country::orderBy('name', 'asc')->get();
        $customers = User::with('customer')->where('role_id', 3)->get();
        $awb_number = Awb::where('service_id', '1')->where('status', '1')->inRandomOrder()
            ->first();
        return view('admin.shipment.create', compact('services', 'countries', 'customers', 'awb_number'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            // 'awb_no' => 'required',
            // 'customer_reference' => 'required',
            'service_id' => 'required',
            'shipper_name' => 'required',
            'shipper_contact_person' => 'required',
            'shipper_address' => 'required',
            'shipper_city' => 'required',
            'shipper_country' => 'required',
            'shipper_phone' => 'required',
            'shipper_postcode' => 'required',
            'receiver_name' => 'required',
            'receiver_contact_person' => 'required',
            'receiver_address' => 'required',
            'receiver_city' => 'required',
            'receiver_country' => 'required',
            'receiver_phone' => 'required',
            'receiver_postcode' => 'required',
            'goods_description' => 'required',
            'declared_value_for_custom' => 'required',
            'pieces' => 'required',
            'kilograms' => 'required',
            'grams' => 'required',
        ]);

        $shipment = new Shipment();
        $shipment->account_number = 12345;
        $shipment->customer_id = $request->customer_id;
        $shipment->awb_no = $request->awb_no;
        $shipment->customer_reference = $request->customer_reference;
        $shipment->service_id = $request->service_id;
        $shipment->shipper_name = $request->shipper_name;
        $shipment->shipper_contact_person = $request->shipper_contact_person;
        $shipment->shipper_address = $request->shipper_address;
        $shipment->shipper_city = $request->shipper_city;
        $shipment->shipper_state = $request->shipper_state;
        $shipment->shipper_country = $request->shipper_country;
        $shipment->shipper_phone = $request->shipper_phone;
        $shipment->shipper_postcode = $request->shipper_postcode;
        $shipment->receiver_name = $request->receiver_name;
        $shipment->receiver_contact_person = $request->receiver_contact_person;
        $shipment->receiver_address = $request->receiver_address;
        $shipment->receiver_city = $request->receiver_city;
        $shipment->receiver_state = $request->receiver_state;
        $shipment->receiver_country = $request->receiver_country;
        $shipment->receiver_phone = $request->receiver_phone;
        $shipment->receiver_postcode = $request->receiver_postcode;
        $shipment->goods_description = $request->goods_description;
        $shipment->declared_value_for_custom = $request->declared_value_for_custom;
        $shipment->pieces = $request->pieces;
        $shipment->kilograms = $request->kilograms;
        $shipment->grams = $request->grams;
        $lengths = $request->length;
        $breadths = $request->breadth;
        $heights = $request->height;
        $shipment->save();
        $shipmentId = $shipment->id;
        // for ($i = 0; $i < count($lengths); $i++) {
        //     Dimension::create([
        //         'shipment_id' => $shipmentId,
        //         'length' => $lengths[$i],
        //         'breadth' => $breadths[$i],
        //         'height' => $heights[$i]
        //     ]);
        // }

        return redirect()->route('shipments')->with('success', "Shipment Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function customAjaxChange($id)
    {

        $customer = Customer::where('id', $id)->first();
        $data['customer_reference']=$customer->reference_no;
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipment = Shipment::findOrFail($id);
        
        // $customers = Customer::findOrFail($id);
        $customers = User::orderBy('name', 'desc')->get();
        $services = Service::orderBy('id', 'desc')->get();
        $countries = Country::orderBy('name', 'asc')->get();

        return view('admin.shipment.edit', compact('shipment','customers', 'services', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'account_number' => 'required',
            'awb_no' => 'required',
            'customer_reference' => 'required',
            'service_id' => 'required',
            'shipper_name' => 'required',
            'shipper_contact_person' => 'required',
            'shipper_address' => 'required',
            'shipper_city' => 'required',
            'shipper_country' => 'required',
            'shipper_phone' => 'required',
            'shipper_postcode' => 'required',
            'receiver_name' => 'required',
            'receiver_contact_person' => 'required',
            'receiver_address' => 'required',
            'receiver_city' => 'required',
            'receiver_country' => 'required',
            'receiver_phone' => 'required',
            'receiver_postcode' => 'required',
            'goods_description' => 'required',
            'declared_value_for_custom' => 'required',
            'pieces' => 'required',
            'kilograms' => 'required',
            'grams' => 'required',
        ]);

        $shipment = Shipment::findOrFail($id);
        // $shipment->account_number = $request->account_number;
        $shipment->awb_no = $request->awb_no;
        $shipment->customer_reference = $request->customer_reference;
        $shipment->service_id = $request->service_id;
        $shipment->shipper_name = $request->shipper_name;
        $shipment->shipper_contact_person = $request->shipper_contact_person;
        $shipment->shipper_address = $request->shipper_address;
        $shipment->shipper_city = $request->shipper_city;
        $shipment->shipper_state = $request->shipper_state;
        $shipment->shipper_country = $request->shipper_country;
        $shipment->shipper_phone = $request->shipper_phone;
        $shipment->shipper_postcode = $request->shipper_postcode;
        $shipment->receiver_name = $request->receiver_name;
        $shipment->receiver_contact_person = $request->receiver_contact_person;
        $shipment->receiver_address = $request->receiver_address;
        $shipment->receiver_city = $request->receiver_city;
        $shipment->receiver_state = $request->receiver_state;
        $shipment->receiver_country = $request->receiver_country;
        $shipment->receiver_phone = $request->receiver_phone;
        $shipment->receiver_postcode = $request->receiver_postcode;
        $shipment->goods_description = $request->goods_description;
        $shipment->declared_value_for_custom = $request->declared_value_for_custom;
        $shipment->pieces = $request->pieces;
        $shipment->kilograms = $request->kilograms;
        $shipment->grams = $request->grams;


        $shipment->save();

        return redirect()->route('shipments')->with('success', "Shipment Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipment = Shipment::findOrFail($id);
        // foreach ($shipment->dimensions as $dimension) {
        //     $dimension->forceDelete();
        // }
        $shipment->delete();
        return redirect()->route('shipments')->with('error', 'Shipment Deleted Successfully');
    }
}
