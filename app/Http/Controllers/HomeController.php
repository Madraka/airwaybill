<?php

namespace App\Http\Controllers;

use App\Models\CMSService;
use App\Models\OurserviceSection;
use Illuminate\Http\Request;
use App\Models\Page;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.welcome');
    }
    public function ourservices($slug)
    {
        $ourservice = CMSService::where('slug',$slug)->first();
        return view('front.services',compact('ourservice'));
    }
    public function page($slug)
    {
    	$page = Page::where('slug',$slug)->first();
        return view('front.page',compact('page'));
    }
    public function aboutus(){
        return view('front.aboutus');
    }
    public function contactus(){
        return view('front.contactus');
    }
}
