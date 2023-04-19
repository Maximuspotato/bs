<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Exports\AttendeesExport;
use Maatwebsite\Excel\Facades\Excel;

class AttendeesController extends Controller
{
    public function register(){
        return view('attendees.register', ['event'=>Event::latest()->first()])->with('page', 'register');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'number' => 'required',
            'org' => 'required',
        ]);

        if (isset($request->mpesa)) {
            $formFields['mpesa'] = $request['mpesa'];
        }
        //dd($formFields);

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
