<?php

namespace App\Http\Controllers\admin\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//===============================
use DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//===============================
class localityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $locality=  \App\Models\locality::where('status','1')->get();
      return view('admindash.master.locality',compact('locality'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        $data['all_state']=  \App\Models\state::orderBy('state_name')->get()->all();
        $data['latestmapapi'] = \App\Models\mapapi::orderBy('created_at', 'DESC')->first();
        return view('admindash.master.locality_add',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_inserted= \App\Models\locality::create($request->all());
      if ($data_inserted) {
            alert()->success('Locality has been saved Prperly.', 'Locality Added Sucessfully');
            return back();
      }
        alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
        return back();
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
        //
    }
}
