<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use App\Exports\CityExport;
use Maatwebsite\Excel\Facades\Excel;
use DataTables;

class CityController extends Controller
{
    public function city_index(Request $request)
    {
        if ($request->ajax()) {
            $cities = City::with('state.country')->whereNotNull('id');
            return Datatables::of($cities)
                ->addIndexColumn()
                ->make(true);
        }
        return view('index');
    }

    // public function city_index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $cities = City::with('state.country')->whereNotNull('id')->get();
    //         return Datatables::of($cities)
    //             ->addIndexColumn()
    //             ->make(true);
    //     }

    //     return view('index');
    // }

    public function get_city_data()
    {
        return Excel::download(new CityExport, 'cities.xlsx');
    }
}
