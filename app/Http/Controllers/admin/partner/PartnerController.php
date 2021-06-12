<?php

namespace App\Http\Controllers\admin\partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    function allpartners(){
       return view('admindash.partners.all_partners');
    }



    function addpartners(){
        return view('admindash.partners.add_partners');
    }

    function editpartner(){
        return view('admindash.partners.edit_partners');
    }
}
