<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use Illuminate\Support\Facades\Validator;
//=====================Imports==================
class DashboardController extends Controller
{
    public function admindashboard()
    {
    $all_partners= partner::count();
       return view('admindash.dashboard',compact('all_partners'));
    }

}
