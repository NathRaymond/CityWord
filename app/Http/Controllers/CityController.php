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
        try {
            if ($request->ajax()) {
                $cities = City::with('state.country')->whereNotNull('id')->get();
                return Datatables::of($cities)
                    ->addIndexColumn()
                    ->make(true);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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


    // public function city_index(Request $request)
    // {

    //     if ($request->ajax()) {
    //         $cities = City::whereNotNull('id')->with('stateName')->get();

    //         return Datatables::of($cities)
    //             ->addIndexColumn()
    //             ->make(true);
    //     }

    //     return view('index');
    // }

    // public function index(Request $request)
    // {

    //     if ($request->ajax()) {
    //         $cities = City::whereNotNull('id');

    //         return Datatables::of($cities)
    //             ->addIndexColumn()
    //             ->make(true);
    //     }

    //     return view('city');
    // }

    // public function indexpage(Request $request)
    // {

    //     if ($request->ajax()) {
    //         $cities = City::whereNotNull('id');

    //         return Datatables::of($cities)
    //             ->addIndexColumn()
    //             ->make(true);
    //     }

    //     return view('city');
    // }


}