<?php

namespace App\Http\Controllers\admin\city;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//===============Custom Import============
use file;
use Storage;
//===============Custom Import============
class CityController extends Controller
{
    public function index()
    {
        $all_city=  \App\Models\City::where('status',1)->get();
      if ($all_city) {
            return view('admindash.properties.city.index',compact('all_city'));
      }
    }

    public function create()
    {
        return view('admindash.properties.city.create');
    }


    public function store(Request $request)
    {
        if ($files = $request->file('city_img')) {
            
                $randomId       =   rand(1,1000000);
                $name = $randomId . time() . str_replace(' ', '', $files->getClientOriginalName());
                $filePath = 'upload/city/images/' . $name;
                Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($files,$name),'public');
                $city_insert= \App\Models\City::create([
                        'city_name'=> $request->city_name,
                        'city_img'=> $filePath,
                        'city_about'=> $request->city_about,
                        'count'=> $request->count,
                    ]);
                if ($city_insert) {
                    alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
                    return redirect()->route('all_admin_city');
                }
                alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
                  return back();
        }
    }

    public function edit($id)
    {
        $data = \App\Models\City::find($id);
        if ($data) {
           return view('admindash.properties.city.edit',compact('data'));
        }
        alert()->error('Something Went wrong plese try Agian.', 'City Not Found');
        return back();

    }

    public function update(Request $request, $id)
    {
        $update= \App\Models\City::where('id',$id)->update([
            'city_name'=> $request->city_name,
            'city_about'=> $request->city_about,
            'count'=> $request->count,
        ]);
        if ($update) {
            alert()->success('You Data has been Updated Prperly.', 'Updated Sucessfully');
             return redirect()->route('all_admin_city');
        } else {
            alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
                    return back();
        }
    }

    public function destroy($id)
    {
       $delete= \App\Models\City::destroy($id);
       if ($delete) {
            if ($delete) {
                alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
                return redirect()->route('all_admin_city');
            }
            alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
            return back();
        }
    }
}
