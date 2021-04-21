<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurserviceSection;
use Illuminate\Http\Request;

class OursectionController extends Controller
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
     $data = OurserviceSection::orderBy('id', 'desc')->get();
        return view('admin.ourserviceSection.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.ourserviceSection.create');
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
        $data = new OurserviceSection();
    
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.ourserviceSection')->with('success',"ourserviceSection Created Successfully");
         
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
        $data = OurserviceSection::findOrFail($id);
        return view('admin.ourserviceSection.edit',compact('data'));
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
        $data = OurserviceSection::findOrFail($id);
      
        $data->title = $request->title;
        $data->description = $request->description;


        $data->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.ourserviceSection')->with('success',"ourserviceSection Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = OurserviceSection::findOrFail($id);
      
        $data->delete();
        return redirect()->route('admin.ourserviceSection')->with('error','ourserviceSection Deleted Successfully');
    }
}
