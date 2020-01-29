<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    //
    public function index()
    {
        $Sliders = slider::orderBy('id', 'asc')->paginate(5) ;
        $count = slider::count();
        dd($Sliders,$count);
        #return view('home',compact('Sliders','count'));
    }
    public function create()
    {
        return view('SliderD.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title'     => ['required'],
            'paragraph' => ['required'],
            'image'     => ['required','image'],
        ]);
        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        $slider= new slider();
        $slider->title=$data['title'];
        $slider->paragraph=$data['paragraph'];
        $slider->image= $imagePath;
        $slider->save();
        return redirect('/');
    }
}
