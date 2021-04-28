<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Awb;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('awb')->orderBy('id', 'desc')->get();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'name' => 'required',
        ]);

        $service = new Service();
        $service->name = $request->name;

        $service->save();
        $service_id = $service->id;
        $number = $request->awb;
        if ($this->checkNumberExistence($number)) {
            return redirect()->route('services')->with('error', 'AWB already exists');
        }
        Awb::create([
            'awb_number' => $number,
            'status' => 0,
            'service_id' => $service_id
        ]);

        return redirect()->route('services')->with('success', "Service Added Successfully");
    }

    public function generateRandomAwb()
    {
        for ($i = 0; $i < 50; $i++) {
            $number = mt_rand(1000000000, 9999999999); // better than rand()

            if ($this->checkNumberExistence($number)) {
                return $this->generateRandomAwb();
            }
            Awb::create([
                'awb_number' => $number,
                'status' => 0
            ]);
        }
        return redirect('/admin/awb')->with('success', 'Awb succesfully generated.');
    }

    public function checkNumberExistence($number)
    {
        return Awb::where('awb_number', $number)->exists();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::with('awb')->findOrFail($id);
//        dd($service);
        return view('admin.service.edit', compact('service'));
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
            'name' => 'required',
            'awb_number' => 'required'

        ]);

        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->save();

//        azen
        // dd($request->awb_number);
        foreach($request->awb_number as $awb){
            Awb::where("service_id",$id)
                ->update([
                    "awb_number" => $awb
                ]);
        }
        $services = Service::with('awb')->where('id', $id)->get();
        // dd($services);
        return redirect()->route('services')->with('success', "Service Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();
        return redirect()->route('services')->with('error', 'Service Deleted Successfully');
    }
}
