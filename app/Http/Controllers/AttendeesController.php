<?php

namespace App\Http\Controllers;

use App\Exports\AttendeesExport;
use App\Models\Attendee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

        return redirect('/')->with('message', 'Registration successful');
    }

    public function all(){
        return view('attendees.all', ['attendees' => Attendee::latest()->simplePaginate(100)]);
    }
    public function export() 
    {
        return Excel::download(new AttendeesExport, 'attendees.xlsx');
    }
}
