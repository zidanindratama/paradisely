<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\DB;

class DependentDropdownController extends Controller
{
    public function index()
    {
        $data = [
            'provinces' => Province::all(),
            'provinces_dua' => Province::pluck('name', 'id'),
        ];

        return view('dependent-dropdown.index', $data);
    }

    public function getSubProvince($id){
        echo json_encode(DB::table('indonesia_cities')->where('province_id', $id)->get());
    }

        //
    public function store(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))
            ->pluck('name', 'id');
    
        return response()->json(['message' => 'task was successful']);
    }

    public function kotaAjax($id){
        if($id=0){
            $cities == City::all();
        } else {
            $cities == City::where('id','=',$id)->get();
        }
        return $cities;
    }
}