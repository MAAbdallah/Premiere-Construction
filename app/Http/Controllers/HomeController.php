<?php

namespace App\Http\Controllers;

use App\aboutUs;
use App\aboutUs_service;
use App\service;
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
        $Sliders = slider::orderBy('id', 'asc')->paginate(6) ;
        $AboutUs = aboutUs::first();
        $AboutUs_services = aboutUs_service::all();
        $Service = service::paginate(9);

        return view('home',compact('Sliders','AboutUs','AboutUs_services','Service'));
    }
}
