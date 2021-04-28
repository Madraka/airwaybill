<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manifest;
use App\Models\ManifestShipment;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ManifestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manifests = Manifest::with('shipments')->orderBy('id', 'desc')->get();
        return view('admin.manifest.index', compact('manifests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shipments = Shipment::where('manifest', '=', 0)->get();
        return view('admin.manifest.create', compact('shipments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'flight_no' => 'required',
        ]);
        $manifest= Manifest::create([
            'flight_no'=>$request->flight_no
            ]);
        $manifest_id = $manifest->id;
        foreach($request->shipments as $shipment){            
            Shipment::where('id',$shipment)->update([
                'manifest'=>1,
                'manifest_id' => $manifest_id
            ]); 
        }
        return redirect()->route('manifests')->with('success', "Manifest Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($manifest)
    {
        // $manifest = Manifest::findOrFail($manifest);
        // return view('admin/manifest.show')->with([
        //     'manifest' => $manifest,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($manifest)
    {
        $manifest = Manifest::findOrFail($manifest);
        $shipments = Shipment::where('manifest', '=', 0)->get();
        return view('admin.manifest.edit', compact('manifest', 'shipments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $manifest)
    {
        $this->validate($request, [
            'flight_no' => 'required',

        ]);

        $manifest = Manifest::findOrFail($manifest);
        $manifest->flight_no = $request->flight_no;

        $manifest->save();


        // $manifest->shipments()->sync($request->shipments);
        return redirect('admin/manifests')->with('success', "Manifest Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manifest = Manifest::findOrFail($id);
        $manifest->delete();
        return redirect()->route('manifests')->with('error', "Manifest Deleted Successfully");
    }
}
