<?php

namespace App\Http\Controllers\admin;

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
class DashboardController extends Controller
{
    public function admindashboard()
    {
        $all_count=array([
            'partner_count'=>partner::count(),
            'pg_count'=>mak_properties::where('property_type','PG')->count(),
            'flat_count'=>mak_properties::where('property_type','FLAT')->count(),
            'rooms_count'=>mak_properties::where('property_type','ROOMS')->count(),
        ]);
        $alllistingquery= \App\Models\listing_query::where('status',1)->get();
        foreach ($alllistingquery as $inst)
        {
            $inst->partnername = \App\Models\partner::where('id',$inst->partner_id)->first()->name;
            $inst->propertyname =  \App\Models\mak_properties::where('id',$inst->property_id)->first()->name;
        }
        return view('admindash.dashboard',compact('all_count','alllistingquery'));
    }

}
