<?php

namespace App\Http\Controllers;

use App\aboutUs;
use App\aboutUs_service;
use App\slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Sliders = slider::orderBy('id', 'asc')->paginate(5) ;
        $AboutUs = aboutUs::first();
        $AboutUs_services = aboutUs_service::all();
        #$countS = slider::count();
        #$countA = aboutUs::count();
        #countAS = aboutUs_service::count();
        #dd($Sliders,$countS);
        #dd($AboutUs,$countA);
        return view('home',compact('Sliders','AboutUs','AboutUs_services'));
    }
}
