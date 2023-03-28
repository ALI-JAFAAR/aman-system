<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\WithHeadings;
class CustomerExport implements FromCollection, WithHeadings{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){

        return Customer::select('id','name','dob','insurance','gender','gov_id')->with('gov')->get();
    }

    public function headings(): array
    {
        return [
            'ت',
            'الاسم',
            'تاريخ الميلاد',
            'التامين',
            'الجنس'
        ];
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->name,
            $row->dob,
            $row->insurance,
            $row->gender,
            $row->gov->name,
        ];
    }
}
