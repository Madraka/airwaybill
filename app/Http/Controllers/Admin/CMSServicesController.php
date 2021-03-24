<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMSService;

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
     $cmsservices = CMSService::orderBy('id', 'desc')->get();
        return view('admin.cmsservices.index',compact('cmsservices'));
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
          $this->validate($request,[
            'title'      => 'required',
            'description'      => 'required',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $cmsservice = new CMSService();
    
      

        $cmsservice->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.cmsservices')->with('success',"cmsservices Created Successfully");
         
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
        $cmsservice = CMSService::findOrFail($id);
        return view('admin.cmsservices.edit',compact('cmsservice'));
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
 $this->validate($request,[
    'title'      => 'required',
    'description'      => 'required',
]);
         //--- Logic Section
        $cmsservice = CMSService::findOrFail($id);
      
     

        $cmsservice->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.cmsservices')->with('success',"cmsservices Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmsservice = CMSService::findOrFail($id);
      
        $cmsservice->delete();
        return redirect()->route('admin.cmsservices')->with('error','cmsservices Deleted Successfully');
    }
}
