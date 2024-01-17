<?php

namespace App\Exports;

use App\Models\State;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StateExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'State Code	',
            'Latitude	',
            'Longitude	',
            'Created At	',
            'Country Id',
        ];
    }
    public function collection()
    {
        return State::all();
    }
}