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
    public function getAwb($id){
        $data = Awb::select('awb_number')->where('service_id',$id)->where('status',0)->inRandomOrder()->first();
        if($data)
        $awb = $data->awb_number;
        else 
        $awb = null;
        return $awb;
    }
    public function generateRandomAwb($id){
        for($i = 0; $i<10;$i++){
            $number = mt_rand(11111, 99999); // better than rand()
    
            if ($this->checkNumberExistence($number)) {
                return $this->generateRandomAwb($id);
            }
            Awb::create([
                'awb_number' =>$number,
                'status' => 0,
                'service_id' => $id
                ]);
        }
        return redirect()->route('services')->with('success','Awb succesfully generated.');
    }

    public function generateAwb(Request $request){
            
            $number = $request->awb;
            if ($this->checkNumberExistence($number)) {
                return redirect('admin/awb')->with('error','AWB already exists');
            }
            Awb::create([
                'awb_number' =>$number,
                'status' => 0
                ]);
        return redirect('/admin/awb')->with('success','Awb succesfully added.');
    }

    public function checkNumberExistence($number) {
        return Awb::where('awb_number',$number)->exists();
    }
}
