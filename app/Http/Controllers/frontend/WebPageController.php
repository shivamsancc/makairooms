<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPageController extends Controller
{

    public function hompage()
    {
        return view('frontend.home');
    }





    //============Listing Controller ======================

    function alllisting(){
        return view('frontend.listing.all-listing');
    }
}
