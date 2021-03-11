<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Awb;
use Illuminate\Http\Request;

class AwbController extends Controller
{
    //
    public function index(){
        
        return view('admin.awb.index');
    }
    public function generateAwb(){
        for($i = 0; $i<50;$i++){
            $number = mt_rand(1000000000, 9999999999); // better than rand()
    
            if ($this->checkNumberExistence($number)) {
                return $this->generateAwb();
            }
            Awb::create([
                'awb_number' =>$number,
                'status' => 0
                ]);
        }
        return redirect('/admin/awb')->with('success','Awb succesfully generated.');
    }
    
    public function checkNumberExistence($number) {
        return Awb::where('awb_number',$number)->where('status',0)->exists();
    }
}
