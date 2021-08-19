<?php

namespace App\Http\Controllers\admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adds=  \App\Models\mk_ads::get();
        foreach ($adds as $inst)
        {
            $inst->stateName = \App\Models\state::find($inst->state)->state_name;
            $inst->distName = \App\Models\district::find($inst->district)->district_name;
        }
       return view('admindash.master.ads.index',compact('adds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_state=  \App\Models\state::orderBy('state_name')->get()->all();
        return view('admindash.master.ads.create',compact('all_state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($file = $request->file('ad_design')) {
               $name = rand(1,1000000).time().str_replace(' ', '', $file->getClientOriginalName());
               $filePath = 'upload/ads/images/' . $name;
               \Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($file,$name),'public');
                $ad_created=  \App\Models\mk_ads::create([
                    'name'=> $request->name,
                    'start_date'=> $request->start_date,
                    'end_date'=> $request->end_date,
                    'status'=> $request->status,
                    'place'=> $request->place,
                    'state'=> $request->state,
                    'district'=> $request->district,
                    'ad_design'=> $filePath,
                ]);
            if ($ad_created) {
                alert()->success('Ad has been saved Prperly.', 'Ad Added Sucessfully');
                return redirect()->route('adsmanager.index');
          }
            alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $result= \App\Models\mk_ads::destroy($id);
        if (isset($result)) {
            return true;
        }
        return false;
    }
}
