<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
class LocationController extends Controller
{
    public function getDistrictsByDivision($divisionId){
        $districts = District::where('division_id','=',$divisionId)
                            ->select('id','name')
                            ->get();
        return response()->json([
            'districts' => $districts
        ]);
    }
}
