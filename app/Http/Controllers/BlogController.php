<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function post(){
        return view('blogs.post');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'pic' => 'image|mimes:jpeg,png,jpg,JPEG,PNG,JPG',
            'content' => 'required'
        ]);

        if ($request->hasFile('pic')) {
            $formFields['pic'] = $request->file('pic')->store('pics', 'public');
        }

        Blog::create($formFields);

        return redirect('/blogs')->with('message', 'Blog added succesfully');
    }
    public function blogs(){
        return view('blogs.blogs', ['blogs' => Blog::latest()->paginate(10)])->with('page', 'blog');
    }
}
