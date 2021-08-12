<?php

namespace App\Http\Controllers\admin\query;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class queryController extends Controller
{

    public function listquery()
    {
        $alllistingquery= \App\Models\listing_query::where('status',1)->get();
        foreach ($alllistingquery as $inst)
        {
            $inst->partnername = \App\Models\partner::where('id',$inst->partner_id)->first()->name;
            $inst->propertyname =  \App\Models\mak_properties::where('id',$inst->property_id)->first()->name;
        }
        return view('admindash.query.listingquery',compact('alllistingquery'));
    }

    public function helpquery()
    {
       $allquery= \App\Models\query::where('status',1)->get();
        return view('admindash.query.helpquery',compact('allquery'));
    }

    public function helpquerysoftdelete($id)
    {
       $updatequery= \App\Models\query::softdelete($id);
       if (isset($updatequery)) {
            alert()->success('You Query has been Deleted Prperly.', 'Deleted Sucessfully');
            return back();
        }
        alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
        return back();
    }

    public function listquerysoftdelete($id)
    {
        $updatequery= \App\Models\listing_query::softdelete($id);
       if (isset($updatequery)) {
            alert()->success('You Query has been Deleted Prperly.', 'Deleted Sucessfully');
            return back();
        }
        alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
        return back();
    }

}
