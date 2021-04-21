<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMSService;
use Image;
use Validator;

class CMSServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = CMSService::orderBy('order', 'asc')->get();
        return view('admin.cmsservices.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cmsservices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //--- Validation Section
        $this->validate($request, [
            'title'      => 'required',
            'description'      => 'required',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $service = new CMSService();
        $service->order = $request->order;
<<<<<<< HEAD
=======
        $service->icon = $request->icon;
>>>>>>> 822ee076bca64d8e30d558f829e399fa65984dc6
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $image = time() . $file->getClientOriginalName();
            $file->move('assets/images/cmsservices', $image);
            $service->image = $image;

            // resize image to fixed size
            //$thumb_image = $image.'_thumb';
            // Image::make($file)->resize(122,122)->save(public_path('images/services',$thumb_image));
            //$service->thumbnail = $thumb_image;
        }
        $service->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.cmsservices')->with('success', "service Created Successfully");

        //--- Redirect Section Ends    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = CMSService::findOrFail($id);
        return view('admin.cmsservices.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //--- Validation Section
        $this->validate($request, [
            'title'      => 'required',
            'description'      => 'required',
        ]);
        //--- Validation Section Ends
        //--- Logic Section
        $service = CMSService::findOrFail($id);
        $service->order = $request->order;
<<<<<<< HEAD
=======
        $service->icon = $request->icon;
>>>>>>> 822ee076bca64d8e30d558f829e399fa65984dc6
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->file('image')) {
            @unlink(public_path('assets/images/cmsservices/' . $service->image));
            $file = $request->file('image');
            $image = time() . $file->getClientOriginalName();
            $file->move('assets/images/cmsservices', $image);
            $service->image = $image;

            // resize image to fixed size
            // $thumb_image = $image.'_thumb';
            // Image::make($file)->resize(122,122)->save(public_path('images/secmsservicesrvices',$thumb_image));
            //$service->thumbnail = $thumb_image;
        }
        $service->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.cmsservices')->with('success', "service Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = CMSService::findOrFail($id);
        @unlink(public_path('assets/images/cmsservices/' . $service->image));
        // @unlink(public_path('assets/images/cmsservices'.$service->thumbnail));
        $service->delete();
        return redirect()->route('admin.cmsservices')->with('error', 'service Deleted Successfully');
    }
}
