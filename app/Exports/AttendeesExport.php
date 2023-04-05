<?php

namespace App\Exports;

use App\Models\Attendee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AttendeesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Attendee::select('fname','lname','number','org','mpesa')->get();
    }
    public function headings(): array
    {
        return ["First Name", "Last Name", "Number", 'Organization', 'MPESA code'];
    }
}
