<?php

namespace App\Http\Controllers;

use App\testimoial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimoialController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Test = testimoial::orderBy('id', 'asc')->paginate(5) ;
        $count = testimoial::count();
        dd($Test,$count);
        #return view('home',compact('Test','count'));
    }
    public function create()
    {
        return view('TestimoialD.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name'     => ['required'],
            'position'     => ['required'],
            'paragraph' => ['required'],
            'image'     => ['required','image'],
        ]);
        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        $test= new testimoial();
        $test->name=$data['name'];
        $test->position=$data['position'];
        $test->paragraph=$data['paragraph'];
        $test->image= $imagePath;
        $test->save();
        return redirect('/');
    }
}
