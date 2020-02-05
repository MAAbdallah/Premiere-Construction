<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    //

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('BlogD.show',compact('blog'));
    }

    public function create()
    {
        return view('BlogD.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title'     => ['required'],
            'paragraph' => ['required'],
        ]);
        $imagePath = auth()->user()->image;

        $blog= new Blog();
        $blog->title=$data['title'];
        $blog->paragraph=$data['paragraph'];
        $blog->image= $imagePath;
        $blog->userName = auth()->user()->name;
        $blog->save();
        return redirect('/');
    }

}
