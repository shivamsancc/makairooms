<?php

namespace App\Http\Controllers\admin\property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=====================Imports==================
use DB;
use Storage;
use Carbon\Carbon;
use Image;
use Redirect,Response,File;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use App\Models\mak_properties;
use App\Models\mak_propert_images;
use App\Models\property_features;
use App\Models\property_item;
use App\Models\property_img;
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
    $latestmapapi = mapapi::orderBy('created_at', 'DESC')->first();
    if (!is_null($latestmapapi)) {
     if ($latestmapapi->created_at->format('Y-m-d') == Carbon::now()->toDateString()) {
         $all_features= property_features::orderBy('created_at')->where('status',1)->get()->all();   
         $all_state=  state::orderBy('state_name')->get()->all();
         $all_partners= partner::orderBy('created_at')->where('status',1)->get()->all();
         return view('partnerdashboard.properties.add_property',compact('all_state','all_partners','latestmapapi','all_features'));  
     }
  return redirect()->route('mapapiupdate');
   }
  return redirect()->route('mapapiupdate');

}



   function add_pgpost(Request $request){
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
            'property_features'=>json_encode($request->item_feature),
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
public function eidtproperty($id)
{
    $all_state=  state::orderBy('state_name')->get()->all();
    $latestmapapi = mapapi::orderBy('created_at', 'DESC')->limit(1)->get();
    $property_data =mak_properties::where('id',$id)->get();
    return view('admindash.properties.edit_property',compact('property_data','latestmapapi','all_state'));
    }



 public function updateproperty($id ,Request $request )
{
   $update= mak_properties::where('id',$id)->update([
        'name'=>$request->name,
        'status'=>$request->status,
        'property_type'=>$request->property_type,
        'status'=>'1',
        'youtube_link'=>$request->youtube_link,
        '360_degree_link'=>$request->degree_link,
        'about_property'=>$request->about_property,
        'address'=>$request->address,
        'state'=>$request->state,
        'price_range1'=>$request->price_range1,
        'price_range2'=>$request->price_range2,
        'district'=>$request->district,
        'pincode'=>$request->pincode,
        'lat'=>$request->lat,
        'long'=>$request->long,  
    ]);
    if ($update) {
        alert()->success('You Data has been Updated Prperly.', 'Updated Sucessfully');
         return redirect()->route('allproperties');
    } else {
        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
                return back();
    }
    
}


public function deleteproperty($id){
   $property_item_count= property_item::where('ptoperty_id',$id)->count();
    if ($property_item_count ==0) {
        $images= mak_propert_images::where('property_id', $id)->pluck('img_name');
        if ($images) {
            foreach ($images as $key ) {
                $filePath = 'upload/property/images/' . $key;
                Storage::disk(env("FILESYSTEM_DRIVER"))->delete($filePath,$key,'public');   
                mak_propert_images::where('img_name', $key)->delete();
            }
        }    
         if (mak_properties::destroy($id)) {
            alert()->success('You Property  Has Been Deleted Prperly.', 'Deleted Sucessfully');
            return back();
         }else{
            alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
            return back();
         }
    }
    alert()->error('You Have To Delte Propery Item First To Delete Property.', 'Items in Property ');
    return back();
    
}
//==================================Property Item Controllers================================
public  function propertyitemindex()
{
 $all_properties_item = property_item::orderBy('created_at', 'DESC')->where('status', 1)->get();
   if ($all_properties_item) {
        foreach ($all_properties_item as $inst)
            {
                   $inst->property = mak_properties::find($inst->ptoperty_id)->name;
                    $inst->manger = partner::find($inst->partner_id)->name;
            }
    }
    return  view('admindash.properties.property_item.index',compact('all_properties_item'));
}
public function createpropertyitem(){
    $all_partners= partner::orderBy('created_at')->where('status',1)->get()->all();
    $all_features= property_features::orderBy('created_at')->where('status',1)->get()->all();
    return view('admindash.properties.property_item.add_item',compact('all_partners','all_features'));
}


public function createpropertystore(Request $request){
    $randomurl = $this->random_strings(30); 
        $insert= property_item::create([
            'partner_id'=>$request->partner_id,
            'ptoperty_id'=>$request->ptoperty_id,
            'property_type'=>$request->property_type,
            'item_name'=>$request->item_name,
            'item_for'=>$request->item_for,
            'item_price'=>$request->item_price,
            'item_features'=>json_encode($request->item_feature),
            'slug'=>$randomurl,
        ]);
        $property_id= $insert->id;
        if ($files = $request->file('images')) {
                foreach($request->file('images') as $img) {   
                    $randomId       =   rand(1,1000000);
                    $name = $randomId . time() . str_replace(' ', '', $img->getClientOriginalName());
                    $filePath = 'upload/property/images/' . $name;
                    Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($img,$name),'public');
                    $insert = mak_propert_images::create(['property_id' =>$property_id,'img_name'=> $filePath,'alt_name' =>$name]);
                    alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
                    return redirect()->route('propertyitemindex');}
                }else{
                    alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
                    return redirect()->route('propertyitemindex');           
        }       
      
}


public function deleteitem($id)
{
    if (property_item::destroy($id)) {
        property_img::where('property_item_id',$id)->delete();
        alert()->success('You Data has been Deleted Prperly.', 'Deleted Sucessfully');
        return back();
    }else{
        alert()->error('You Data has not been Deleted.', 'Something Went Wrong');
        return back();
    }
    
}
public function edititem($id){
    $property_data= property_item::where('id',$id)->get();
    $all_partners= partner::orderBy('created_at')->where('status',1)->get()->all();
    $all_features= property_features::orderBy('created_at')->where('status',1)->get()->all();
    return view('admindash.properties.property_item.edit_item',compact('property_data','all_partners','all_features'));
}

public function updateitem($id ,Request $request)
{
    $update= property_item::where('id',$id)->update([
        'partner_id'=>$request->partner_id,
        'ptoperty_id'=>$request->ptoperty_id,
        'property_type'=>$request->property_type,
        'item_name'=>$request->item_name,
        'item_for'=>$request->item_for,
        'item_price'=>$request->item_price,
    ]);
    if ($update) {
        alert()->success('You Data has been Updated Prperly.', 'Updated Sucessfully');
        return back();
    } else {
        alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
                return back();
    }
}

// =======================Property API=================
public function propertyapi(Request $request)
{
    if ($request->ajax())
    {

        $cities = DB::table("mak_properties")->where("partner_id", $request->state_id)
            ->pluck("name", "id");
        return response()
            ->json($cities);
    }
    return abort(404);
}

}
