<?php

namespace App\Exports;

use App\Models\Country;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CountryExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'ISO3',
            'Numeric Code',
            'ISO2',
            'Phone code',
            'Capital',
            'Currency',
            'Currency_name',
            'Currency_symbol',
            'TLD',
            'Native',
            'Region',
            'Subregion',
            'Timezones',
            'Translations',
            'Latitude',
            'Longitude',
            'Emoji',
            'EmojiU',
            'CreatedAt',
            'UpdatedAt',
            'Flag',
            'WikiDataId',
        ];
    }
    public function collection()
    {
        return Country::all();
    }
}
