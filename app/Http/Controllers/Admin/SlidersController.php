<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use Validator;

class SlidersController extends Controller
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
     $sliders = Slider::orderBy('order', 'asc')->get();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.slider.create');
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
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $slider = new Slider();
        $slider->order = $request->order;
        $slider->title = $request->title;
        $slider->description = $request->description;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/sliders',$image);           
            $slider->image = $image;
         
            // resize image to fixed size
            //$thumb_image = $image.'_thumb';
            // Image::make($file)->resize(122,122)->save(public_path('images/sliders',$thumb_image));
            //$slider->thumbnail = $thumb_image;
        } 
        $slider->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.sliders')->with('success',"Slider Created Successfully");
         
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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));
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

         //--- Logic Section
        $slider = Slider::findOrFail($id);
        $slider->order = $request->order;
        $slider->title = $request->title;
        $slider->description = $request->description;

        if ($request->file('image')) 
         {      
            @unlink(public_path('assets/images/sliders/'.$slider->image));
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/sliders',$image);           
            $slider->image = $image;
         
            // resize image to fixed size
           // $thumb_image = $image.'_thumb';
            // Image::make($file)->resize(122,122)->save(public_path('images/sliders',$thumb_image));
            //$slider->thumbnail = $thumb_image;
        } 
        $slider->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.sliders')->with('success',"Slider Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        @unlink(public_path('assets/images/sliders/'.$slider->image));
        // @unlink(public_path('assets/images/sliders'.$slider->thumbnail));
        $slider->delete();
        return redirect()->route('admin.sliders')->with('error','Slider Deleted Successfully');
    }
}
