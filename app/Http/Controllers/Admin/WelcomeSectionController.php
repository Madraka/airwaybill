<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WelcomeSection;

class WelcomeSectionController extends Controller
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
     $data = WelcomeSection::orderBy('id', 'desc')->get();
        return view('admin.welcomeSection.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.welcomeSection.create');
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
        $data = new WelcomeSection();
    
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.welcomesection')->with('success',"welcomesection Created Successfully");
         
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
        $data = WelcomeSection::findOrFail($id);
        return view('admin.welcomeSection.edit',compact('data'));
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
        $data = WelcomeSection::findOrFail($id);
      
        $data->title = $request->title;
        $data->description = $request->description;


        $data->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.welcomesection')->with('success',"welcomesection Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = WelcomeSection::findOrFail($id);
      
        $data->delete();
        return redirect()->route('admin.welcomesection')->with('error','welcomesection Deleted Successfully');
    }
}
