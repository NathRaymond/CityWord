<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use App\Exports\CityExport;
use Maatwebsite\Excel\Facades\Excel;
use DataTables;
use PhpParser\Node\Stmt\ClassLike;
use PhpParser\Node\VarLikeIdentifier;

class CityController extends Controller
{
    public function __construct()
    {

      ini_set('memory_limit', '6024M'); // or you could use 1G
      set_time_limit(8000000);

    }
    
    public function city_index(Request $request)
    {
       
        return view('index');
    }

    public function city_index_data(Request $request)
    {
        
            $cities = City::with('state.country')->whereNotNull('id');
            return Datatables::of($cities)
                ->addIndexColumn()
                ->make(true);
        
    }

    public function special_search(Request $request)
    {
        $q = $request->q;

        $data = City::where(function ($query) use ($q) {
            $query->where('name', 'LIKE', '%' . $q . '%')
                ->orWhereHas('state', function ($stateQuery) use ($q) {
                    $stateQuery->where('name', 'LIKE', '%' . $q . '%')
                        ->orWhereHas('country', function ($countryQuery) use ($q) {
                            $countryQuery->where('name', 'LIKE', '%' . $q . '%');
                        });
                });
        })->with('state.country')->get();

        return $data;
    }


    public function get_city_data()
    {
        return Excel::download(new CityExport, 'cities.xlsx');
    }
}