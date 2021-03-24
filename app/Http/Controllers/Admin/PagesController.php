<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
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
     $pages = Page::orderBy('id', 'desc')->get();
        return view('admin.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.page.create');
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
        $page = new Page();
     
        $page->title = $request->title;
        $page->description = $request->description;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/pages',$image);           
            $page->image = $image;
         
            // resize image to fixed size
            //$thumb_image = $image.'_thumb';
            // Image::make($file)->resize(122,122)->save(public_path('images/pages',$thumb_image));
            //$page->thumbnail = $thumb_image;
        } 
        $page->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.pages')->with('success',"Page Created Successfully");
         
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
        $page = Page::findOrFail($id);
        return view('admin.page.edit',compact('page'));
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
//--- Validation Section Ends
         //--- Logic Section
        $page = Page::findOrFail($id);
      
        $page->title = $request->title;
        $page->description = $request->description;

        if ($request->file('image')) 
         {      
            @unlink(public_path('assets/images/pages/'.$page->image));
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/pages',$image);           
            $page->image = $image;
         
            // resize image to fixed size
           // $thumb_image = $image.'_thumb';
            // Image::make($file)->resize(122,122)->save(public_path('images/pages',$thumb_image));
            //$page->thumbnail = $thumb_image;
        } 
        $page->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.pages')->with('success',"Page Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        @unlink(public_path('assets/images/pages/'.$page->image));
        // @unlink(public_path('assets/images/pages'.$page->thumbnail));
        $page->delete();
        return redirect()->route('admin.pages')->with('error','Page Deleted Successfully');
    }
}
