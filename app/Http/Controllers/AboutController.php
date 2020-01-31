<?php

namespace App\Http\Controllers;

use App\aboutUs;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Abouts = aboutUs::orderBy('id', 'asc')->paginate(5) ;
        $count = aboutUs::count();
        dd($Abouts,$count);
        #return view('home',compact('Abouts','count'));
    }
    public function create()
    {
        return view('AboutD.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title1'     => ['required'],
            'title2'     => ['required'],
            'paragraph' => ['required'],
        ]);

        $About= new aboutUs();
        $About->title1=$data['title1'];
        $About->title2=$data['title2'];
        $About->paragraph=$data['paragraph'];
        $About->save();
        return redirect('/');
    }
}
