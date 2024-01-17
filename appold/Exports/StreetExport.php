<?php

namespace App\Exports;

use App\Models\Street;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StreetExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Latitude',
            'Longitude',
            'Created At',
            'Updated At',
            'City ID',
        ];
    }
    public function collection()
    {
        return Street::all();
    }
}