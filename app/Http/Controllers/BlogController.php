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

        return redirect('/gallery')->with('message', 'Blog added succesfully');
    }
    public function gallery(){
        return view('blogs.blogs', ['blogs' => Blog::latest()->simplePaginate(10)])->with('page', 'gallery');
    }

    public function show(Blog $blog){
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    public function edit(Blog $blog){
        return view('blogs.edit', [
            'blog' => $blog
        ]);
    }

    public function update(Request $request, Blog $blog){
        $formFields = $request->validate([
            'title' => 'required',
            'pic' => 'image|mimes:jpeg,png,jpg,JPEG,PNG,JPG',
            'content' => 'required'
        ]);

        if ($request->hasFile('pic')) {
            $formFields['pic'] = $request->file('pic')->store('pics', 'public');
        }

        $blog->update($formFields);

        return back()->with('message', 'Blog updated succesfully');
    }

    public function delete(Blog $blog){
        $blog->delete();
        return redirect('/gallery')->with('message', 'Blog deleted successfully');
    }
}
