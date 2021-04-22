<?php

namespace App\Http\Controllers;

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
    public function services()
    {
        return view('front.services');
    }
    public function page($slug)
    {
    	$page = Page::where('slug',$slug)->first();
        return view('front.page',compact('page'));
    }
}
