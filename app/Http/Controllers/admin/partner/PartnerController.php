<?php

namespace App\Http\Controllers\admin\partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use Illuminate\Support\Facades\Validator;
//=====================Imports==================

class PartnerController extends Controller
{
    function allpartners(){
        $all_partners= partner::orderBy('created_at')->get()->all();
        foreach ($all_partners as $inst)
        {
            $inst->stateName = state::find($inst->state)->state_name;
            $inst->distName = district::find($inst->district)->district_name;
        }
       return view('admindash.partners.all_partners',compact('all_partners'));
    }



    function addpartners(){
        $all_state=  state::orderBy('state_name')->get()->all();
        return view('admindash.partners.add_partners',compact('all_state'));
    }
    //=====================Partner Add Post=====================
    function addpartnerspost(Request $request){
        $this->validate($request, [
        'name' =>  ['required', 'string', 'max:255'], 
        'mail' => ['required', 'string', 'email', 'max:255', 'unique:mak_partners'], 
        'phone' => ['required', 'string', 'min:10','unique:mak_partners' ], 
        ]);


        partner::create($request->all());

    }
    function editpartner(){
        return view('admindash.partners.edit_partners');
    }



     // =======================
     public function districtapi(Request $request)
     {
         if ($request->ajax())
         {
 
             $cities = DB::table("apps_districts")->where("state_code", $request->state_id)
                 ->orderBy('district_name', 'ASC')
                 ->pluck("district_name", "id");
             return response()
                 ->json($cities);
         }
         return abort(404);
     }
}

