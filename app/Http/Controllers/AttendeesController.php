<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    public function register(){
        return view('attendees.register')->with('page', 'register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'number' => 'required',
            'org' => 'required',
        ]);

        Attendee::create($formFields);

        return back()->with('message', 'Registration successful');
    }
}
