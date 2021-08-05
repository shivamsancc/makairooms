<?php

namespace App\Http\Controllers\partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use App\Models\mak_properties;
use Illuminate\Support\Facades\Validator;
//=====================Imports==================
class dashbordController extends Controller
{
    public function partnerdashboard()
    {
        $all_count=array([
            'partner_count'=>partner::count(),
            'pg_count'=>mak_properties::where('property_type','PG')->count(),
            'flat_count'=>mak_properties::where('property_type','FLAT')->count(),
            'rooms_count'=>mak_properties::where('property_type','ROOMS')->count(),
        ]);
        // return $all_count['0']['partner_count'];
        return view('partnerdashboard.dashboard',compact('all_count'));
    }
}
