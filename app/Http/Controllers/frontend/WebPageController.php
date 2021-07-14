<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=================Include=========
use DB;
use Storage;
use Image;
use File;
use App\Models\state;
use App\Models\district;
use App\Models\partner;
use App\Models\mak_properties;
use App\Models\mak_propert_images;
use App\Models\property_item;
use App\Models\mapapi;
use App\Models\blog_post;
use App\Models\blog_category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
//=================Include=========
class WebPageController extends Controller
{

    public function hompage()
    {
        $all_flats= mak_properties::orderBy('created_at')->where('property_type','FLAT')->where('status',1)->get()->all();
        foreach ($all_flats as $inst)
        {
            $inst->stateName = state::find($inst->state)->state_name;
            $inst->distName = district::find($inst->district)->district_name;
            $inst->partnername = partner::find($inst->partner_id)->get();
            $inst->images = mak_propert_images::where('property_id', $inst->id)->get();
        }
        // return $all_properties;
        $all_pg= mak_properties::orderBy('created_at')->where('property_type','PG')->where('status',1)->get()->all();
        foreach ($all_pg as $inst)
        {
            $inst->stateName = state::find($inst->state)->state_name;
            $inst->distName = district::find($inst->district)->district_name;
            $inst->partnername = partner::find($inst->partner_id)->get();
            $inst->images = mak_propert_images::where('property_id', $inst->id)->get();
        }

        $all_rooms= mak_properties::orderBy('created_at')->where('property_type','ROOMS')->where('status',1)->get()->all();
        foreach ($all_rooms as $insts)
        {
            $insts->stateName = state::find($insts->state)->state_name;
            $insts->distName = district::find($insts->district)->district_name;
            $insts->partnername = partner::find($insts->partner_id)->get();
            $insts->images = mak_propert_images::where('property_id', $insts->id)->get();
        }
        $all_POST= blog_post::orderBy('created_at')->where('status',1)->take(3)->get();
        foreach ($all_POST as $insts)
        {
            $insts->category_name = blog_category::find($insts->category)->name;
        }
        return view('frontend.home',compact('all_flats','all_pg','all_rooms','all_POST'));
    }





    //============Listing Controller ================

    function alllisting($type){
        $all_properties = mak_properties::orderBy('created_at')->where('property_type',$type)->where('status',1)->get()->all(); 
        foreach ($all_properties as $insts)
        {
            $insts->stateName = state::find($insts->state)->state_name;
            $insts->distName = district::find($insts->district)->district_name;
            $insts->partnername = partner::find($insts->partner_id)->get();
            $insts->images = mak_propert_images::where('property_id', $insts->id)->get();
        }
        return view('frontend.listing.all-listing',compact('all_properties'));
    }
    //==============single Listing===================

    function siglelisting($slug){
        // return $slug;
        $latestmapapi = mapapi::orderBy('created_at', 'DESC')->limit(1)->get();
        $property= mak_properties::where('slug',$slug)->where('status',1)->first();
        $stateName = state::find($property->state)->state_name;
        $distName = district::find($property->district)->district_name;
        $partnername = partner::find($property->partner_id)->get();
        $images = mak_propert_images::where('property_id', $property->id)->get();
        $related_listing= mak_properties::orderBy('created_at')->where('property_type',$property->property_type)->where('status',1)->get()->all();
        foreach ($related_listing as $inst)
        {
            $inst->stateName = state::find($inst->state)->state_name;
            $inst->distName = district::find($inst->district)->district_name;
            $inst->partnername = partner::find($inst->partner_id)->get();
            $inst->images = mak_propert_images::where('property_id', $inst->id)->get();
        }
        $property_item = property_item::where('id',$property->partner_id)->get();
        return view('frontend.listing.single_listing',compact('property','related_listing','partnername','stateName','distName','images','latestmapapi','property_item'));
    }

    //===============================================
    function newlogin(){
        return view('auth.login_new');
    }

    public function mapapiupdate()
    {
        $url = "https://outpost.mapmyindia.com/api/security/oauth/token?grant_type=client_credentials&client_id=33OkryzDZsLRjoC8fmCxWxELgv7x6cYJFDTXQzAOqUhlS9DyaZjJCD_6_PeHc_6wNH0nNJ91p57QtpoHVULO2W_smTLS5h5hvCNpcpA8TxQ-epJ2uXCAFw==&client_secret=lrFxI-iSEg_pkRLZTay7C4tDBbWhENGnWbFqi-m-s7QLlEBIx-N0ljIcbWx6zY6qqwgaEXVuu6a1kJTjR_XKNOso_lt0JKCCxXflgAWIrCg89K-TinLcqmePWTZzbsPL";

        $response = Http::post($url);
        $data = json_decode($response, true);
        $something = mapapi::create($data);
        if ($something->save())
        {
            Mail::send('mail.kyc_completed', $data, function ($message)
            {
                $message->from('info@nextgyaan.com', 'API Update');
                $message->to('shviamanandiet@gmail.com');
            });
        }
        else
        {
            Mail::send('mail.kyc_completed', $data, function ($message)
            {
                $message->from('info@nextgyaan.com', 'API Update Failed');
                $message->to('shviamanandiet@gmail.com');
            });
        }
    }

//==================================Blog=====================================================
    public function blog(){
        $all_POST= blog_post::with('tagged')->orderBy('created_at')->where('status',1)->simplePaginate(6);
        foreach ($all_POST as $insts)
        {
            $insts->category_name = blog_category::find($insts->category)->name;
        }
        $allcategory= blog_category::orderBy('created_at')->where('status',1)->get();
         $tags=blog_post::existingTags();
        return view('frontend.blog.blog',compact('all_POST','allcategory','tags'));
    }

    public function singleblog($slug){
        $POST= blog_post::with('tagged')->orderBy('created_at')->where('slug',$slug)->where('status',1)->get()->all();
        foreach ($POST as $insts)
        {
            $insts->category_name = blog_category::find($insts->category)->name;
        }
        $next_record = blog_post::where('id', '>', $POST['0']->id)->orderBy('id')->first();
        $pre_record = blog_post::where('id', '<', $POST['0']->id)->orderBy('id')->first();
        return view('frontend.blog.single',compact('POST','pre_record','next_record'));
    }






















}
