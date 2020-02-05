<?php

namespace App\Http\Controllers;

use App\aboutUs;
use App\aboutUs_service;
use App\Blog;
use App\service;
use App\slider;
use App\testimoial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Sliders = slider::orderBy('id', 'asc')->paginate(6) ;
        $AboutUs = aboutUs::first();
        $AboutUs_services = aboutUs_service::all();
        $Service = service::where('type','Service')->paginate(9);
        $feature = service::where('type','Feature')->get();
        $Test = testimoial::all();
        $Blogs = Blog::all();
        return view('home',compact('Sliders','AboutUs','AboutUs_services','Service','feature','Test','Blogs'));
    }
}
