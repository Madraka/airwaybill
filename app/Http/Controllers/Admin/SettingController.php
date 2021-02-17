<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
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
        $setting = Setting::first();
        return view('admin.setting',compact('setting'));
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
            'favicon'      => 'mimes:jpeg,jpg,png,svg',
            'logo'      => 'mimes:jpeg,jpg,png,svg',
            'company_name'       => 'required',
            'copyright'       => 'required',
            'company_email'=> 'required',
            'company_address'=> 'required',
           
        ]);
        //--- Validation Section Ends 
         //--- Logic Section
        $settings = Setting::findOrFail($id);
        $settings->company_name = $request->company_name;
        $settings->company_description = $request->company_description;
        $settings->company_email = $request->company_email;
        $settings->company_address = $request->company_name;
        $settings->company_phone = $request->company_phone;
        $settings->company_mobile = $request->company_mobile;
        $settings->copyright = $request->copyright;

        if($request->file('favicon')){
            @unlink(public_path('/assets/images/settings/'.$settings->favicon));
            $file = $request->file('favicon');
            $favicon = time().$file->getClientOriginalName();
            $file->move('assets/images/settings',$favicon);           
            $settings->favicon = $favicon;

        }
        if($request->file('company_logo')){
            @unlink(public_path('/assets/images/settings/'. $settings->company_logo));
            $logofile = $request->file('company_logo');
            $company_logo = time().$logofile->getClientOriginalName();
            $logofile->move('assets/images/settings',$company_logo);           
            $settings->company_logo = $company_logo;
        }
             
        //--- Logic Section Ends
        //--- Redirect Section   
        if(  $settings->save() ){
            return redirect()->back()->with('success',"Site Settings Updated Successfully");
        }
        //--- Redirect Section Ends 
    }

   
}
