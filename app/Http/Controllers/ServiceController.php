<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Services = service::orderBy('id', 'asc')->paginate(5) ;
        $count = service::count();
        dd($Services,$count);
        #return view('home',compact('Services','count'));
    }
    public function create()
    {
        return view('ServiceD.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title'     => ['required'],
            'paragraph' => ['required'],
        ]);

        $Service= new service();
        $Service->title=$data['title'];
        #$iconsFunFact = ['flaticon-check-mark','flaticon-smile','flaticon-email'];
        /*$iconsService = ['flaticon-planning','flaticon-diagram','flaticon-chart'];
        $iconsFeature = ['flaticon-idea','flaticon-options','flaticon-leadership','flaticon-responsive','flaticon-password','flaticon-24-hours'];
        if (request()->type=='Service'){
            $icon = $iconsService[array_rand($iconsService,1)];
            $Service->icon = $icon;
            // can after add this icon remove from array
        }
        elseif (request()->type=='Feature'){
            $icon=$iconsFeature[array_rand($iconsFeature,1)];
            $Service->icon = $icon;
            // can after add this icon remove from array
        }*/
        $Service->paragraph=$data['paragraph'];
        $Service->type=request()->type;
        $Service->save();
        return redirect('/');
    }
}
