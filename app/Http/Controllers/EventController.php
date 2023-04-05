<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function add(){
        return view('events.add');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'pic' => 'image|mimes:jpeg,png,jpg,JPEG,PNG,JPG',
            'description' => 'required',
            'link' => 'url',
            'location' => 'required',
            'date' => 'required'
        ]);

        if ($request->hasFile('pic')) {
            $formFields['pic'] = $request->file('pic')->store('pics', 'public');
        }

        Event::create($formFields);

        return redirect('/')->with('message', 'Event added succesfully');
    }
}
