<?php

namespace App\Http\Controllers\admin\partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use App\User;
use Illuminate\Support\Facades\Hash;
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
        // return $request->all();
        $this->validate($request, [
        'name' =>  ['required', 'string', 'max:255'], 
        'email' => ['required', 'string', 'email', 'max:255','unique:users'], 
        'phone' => ['required', 'string', 'min:10','unique:mak_partners' ], 
        ]);
        $addpartner= partner::create($request->all());
        if ($addpartner) {
           $partner= User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'type' => 2,
            ]);
             $partner_id= $partner->id;
             partner::where('email',$request->email)->update(['user_id'=>$partner_id]);
            alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
            return redirect()->route('allpartners');
        } else {
            alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return back();
        }
    }
    function editpartner($id){
        $all_state=  state::orderBy('state_name')->get()->all();
        $partner =partner::find($id);
        return view('admindash.partners.edit_partners',compact('all_state','partner'));
    }

    function partner_update($id, Request $request){
       $update= partner::where('id',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'state'=>$request->state,
            'district'=>$request->district,
            'pincode'=>$request->pincode]);
            if ($update) {
             
                alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
                return redirect()->route('allpartners');
            } else {
                alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
                return back();
            }
            }
            
            


     // =======================Distrct API=================
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

