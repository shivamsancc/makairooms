<?php

namespace App\Http\Controllers\admin\features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//================imported===========
use App\Models\property_features;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
//===================================
class featuresController extends Controller
{

    public function index()
    {
    $all_feature=property_features::orderBy('created_at')->where('status',1)->get();
     return view('admindash.features.index',compact('all_feature'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
         // return $request->all();
         $this->validate($request, [
            'f_name' =>  ['required', 'string', 'max:255','unique:property_features'], 
            'f_icon' => ['required', 'string', 'max:255','unique:property_features'], 
            ]);
        if (property_features::create($request->all())) {
            return back();
            alert()->success('You Data has been saved Prperly.', 'Save Sucessfully');
            return redirect()->route('allproperties');   
        } else {
            alert()->error('You Data has not been saved Prperly.', 'Something Went Wrong');
            return redirect()->route('allproperties');
   
        }
        
        return $request->all();
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
