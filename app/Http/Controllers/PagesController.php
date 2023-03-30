<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //return views of different pages
    public function home(){
        return view('pages.home')->with('page', 'home');
    }
    public function about(){
        return view('pages.about')->with('page', 'about');
    }
    public function events(){
        return view('pages.events')->with('page', 'events');
    }
    public function blog(){
        return view('pages.blog')->with('page', 'blog');
    }
    public function contact(){
        return view('pages.contact')->with('page', 'contact');
    }
}
