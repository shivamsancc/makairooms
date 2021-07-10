<?php

namespace App\Http\Controllers\admin\property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use Storage;
use Image;
use Redirect,Response,File;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use App\Models\mak_properties;
use App\Models\mak_propert_images;
use App\Models\mapapi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
//=====================Imports==================
class propertyController extends Controller
{
    

    // =================================================
    public function random_strings($length_of_string) 
    { 
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
        return substr(str_shuffle($str_result),  
                        0, $length_of_string); 
    }



   function all_properties(){
    $all_properties= mak_properties::orderBy('created_at')->where('status',1)->get()->all();
    foreach ($all_properties as $inst)
    {
        $inst->stateName = state::find($inst->state)->state_name;
        $inst->distName = district::find($inst->district)->district_name;
        $inst->partnername = partner::find($inst->partner_id)->name;
    }
       return view('admindash.properties.all_property',compact('all_properties'));
   }






   function add_property(){
        $latestmapapi = mapapi::orderBy('created_at', 'DESC')->limit(1)->get();
        $all_state=  state::orderBy('state_name')->get()->all();
        $all_partners= partner::orderBy('created_at')->where('status',1)->get()->all();
       return view('admindash.properties.add_property',compact('all_state','all_partners','latestmapapi'));
   }



   function add_pgpost(Request $request){
        // return $request->all();
        $randomurl = $this->random_strings(30); 
        $insert= mak_properties::create([
            'partner_id'=>$request->partner_id,
            'name'=>$request->name,
            'property_type'=>$request->property_type,
            'status'=>$request->status,
            'youtube_link'=>$request->youtube_link,
            '360_degree_link'=>$request->degree_link,
            'about_property'=>$request->about_property,
            'address'=>$request->address,
            'state'=>$request->state,
            'price_range1'=>$request->price_range1,
            'price_range2'=>$request->price_range2,
            'slug'=>$randomurl,
            'district'=>$request->district,
            'pincode'=>$request->pincode,
            'lat'=>$request->lat,
            'long'=>$request->long]);
        $property_id= $insert->id;
       if ($files = $request->file('images')) {
         foreach($request->file('images') as $img) {   
            $randomId       =   rand(1,1000000);
            $name = $randomId . time() . str_replace(' ', '', $img->getClientOriginalName());
            $filePath = 'upload/property/images/' . $name;
            Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($img,$name),'public');
            $insert = mak_propert_images::create(['property_id' =>$property_id,'img_name'=> $filePath,'alt_name' =>$name]);
         }
         alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
         return redirect()->route('allproperties');

     }

   }
}
