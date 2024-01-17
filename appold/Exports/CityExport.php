<?php

namespace App\Exports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CityExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Latitude',
            'Longitude',
            'createdAt',
            'updatedAt',
            'stateId',
        ];
    }
    public function collection()
    {
        return City::all();
    }
}