<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=================Include=========
use DB;
use Storage;
use Image;
use File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
//=================Include=========
class WebPageController extends Controller
{

    public function hompage()
    {
        $all_POST= \App\Models\blog_post::orderBy('created_at', 'DESC')->where('status',1)->take(3)->get();
        foreach ($all_POST as $insts)
        {
            $insts->category_name = \App\Models\blog_category::find($insts->category)->name;
        }
        $all_city=  \App\Models\City::where('status',1)->get();
        if ($all_city) {
            $allcity =$all_city;
        }

        return view('frontend.home',compact('all_POST','allcity'));
    }

    //============Listing Controller ================

    function alllisting($type){
        $all_properties = \App\Models\mak_properties::orderBy('created_at')->where('property_type',$type)->where('status',1)->get(); 
        foreach ($all_properties as $insts)
        {
            $insts->stateName = \App\Models\state::find($insts->state)->state_name;
            $insts->distName = \App\Models\district::find($insts->district)->district_name;
            $insts->partnername = \App\Models\partner::getpropertyuser($insts->partner_id);
            $insts->images = \App\Models\mak_propert_images::where('property_id', $insts->id)->get();
        }
        $localities= \App\Models\locality::getlisting();
        
        return view('frontend.listing.all-listing',compact('all_properties','localities'));
    }
    //==============single Listing===================

    function siglelisting($slug){
        $property= \App\Models\mak_properties::where('slug',$slug)->where('status',1)->first();
            if ($property) {
                $property['latestmapapi'] = \App\Models\mapapi::orderBy('created_at', 'DESC')->first();
                $property['stateName'] = \App\Models\state::find($property->state)->state_name;
                $property['distName'] = \App\Models\district::find($property->district)->district_name;
                $property['partnername'] = \App\Models\partner::where('user_id',$property->partner_id)->first();
                $property['images'] = \App\Models\mak_propert_images::where('property_id', $property->id)->get();
                $property['related_listing']= \App\Models\mak_properties::orderBy('created_at')->where('property_type',$property->property_type)->where('status',1)->get()->all();
                foreach ($property['related_listing'] as $inst)
                {
                    $inst['stateName'] = \App\Models\state::find($inst->state)->state_name;
                    $inst['distName'] = \App\Models\district::find($inst->district)->district_name;
                    $inst['partnername'] = \App\Models\partner::where('user_id',$inst->partner_id)->get();
                    $inst['images'] = \App\Models\mak_propert_images::where('property_id', $inst->id)->get();
                }
                if (!is_null($property->property_features)) {
                    if ($property->property_features) {
                        foreach (json_decode($property->property_features)	as $inst)
                        {
                            $property['property_features']=\App\Models\property_features::orderBy('created_at')->where('status',1)->get();
                        }
                    }
                }
                $xyx= \App\Models\property_item::where('ptoperty_id',$property->id)->get();
                if ($xyx) {
                    $property['property_item']= $xyx;
                }               
            }

        return view('frontend.listing.single_listing',compact('property'));
    }

//=================================================Filter Listing========================
    public function properyfilter(Request $request)
        {
           $all_properties= $this->filterview($request);
            foreach ($all_properties as $insts)
            {
                $insts->stateName = \App\Models\state::find($insts->state)->state_name;
                $insts->distName = \App\Models\district::find($insts->district)->district_name;
                $insts->partnername = \App\Models\partner::getpropertyuser($insts->partner_id);
                $insts->images = \App\Models\mak_propert_images::where('property_id', $insts->id)->get();
            }
            $localities= \App\Models\locality::getlisting();

            return view('frontend.listing.all-listing',compact('all_properties','localities'));
        }

        public function filterview(Request $request)
        {
            $users = \App\Models\mak_properties::where('status', 1);

            if ($request->has('property_type')) {
                $users->where('property_type', $request->property_type);
            }
    
            if ($request->has('gender')) {
                $users->where('gender', $request->gender);
            }
    
            return $users->get()->all();   

        }
//===============================================Query Submission =========================
    public function propertyquerySubmit(Request $request){
        $old_cookie= $_COOKIE['ConnectoID'];
       $data_inserted= \App\Models\listing_query::create([
            'date_of_visit'=> $request->date_of_visit,
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'property_id'=> $request->property_id,
            'partner_id'=> $request->partner_id,
            'form_message'=> $request->form_message,
            'cookie_id'=> $old_cookie,
        ]);
        if ($data_inserted) {
            alert()->success('You Query has been saved Prperly.', 'Query Sent Sucessfully');
            return back();
        }
        alert()->error('Something Went wrong plese try Agian.', 'Something Went Wrong');
        return back();

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
        $something = \App\Models\mapapi::create($data);
        if ($something->save())
        {
            return back();
         }    
    }

//==================================Blog=====================================================
    public function blog(){
                $all_POST= \App\Models\blog_post::with('tagged')->orderBy('created_at')->where('status',1)->simplePaginate(6);
                foreach ($all_POST as $insts)
                    {
                        $insts->category_name = \App\Models\blog_category::find($insts->category)->name;
                    }
                $allcategory= \App\Models\blog_category::orderBy('created_at')->where('status',1)->get();
                $tags=\App\Models\blog_post::existingTags();

        return view('frontend.blog.blog',compact('all_POST','allcategory','tags'));
    }

    public function singleblog($slug){
            $POST= \App\Models\blog_post::with('tagged')->where('slug',$slug)->where('status',1)->first();
            if ($POST) {
                $POST['category_name'] = \App\Models\blog_category::find($POST->category)->name;
                $POST['next_record'] = \App\Models\blog_post::where('id', '>', $POST->id)->orderBy('id')->first();
                $POST['pre_record'] = \App\Models\blog_post::where('id', '<', $POST->id)->orderBy('id')->first();    
            }

        return view('frontend.blog.single',compact('POST'));
    }

    public function catergoryblog($category){
        $allcategory= \App\Models\blog_category::orderBy('created_at')->where('status',1)->get();
        $category = \App\Models\blog_category::where('slug',$category)->where('status',1)->first();
        $all_POST = \App\Models\blog_post::where('category',$category->id)->orderBy('created_at')->simplePaginate(6);
        foreach ($all_POST as $insts)
        {
            $insts->category_name = \App\Models\blog_category::find($insts->category)->name;
        }
        $tags=\App\Models\blog_post::existingTags();

     return view('frontend.blog.blog',compact('all_POST','allcategory','tags','category'));
    }




    function newslettersubbmit(Request $request)
    {
        if ($request->newsletter_email)
        {
            $data = \DB::table("newsletters")->where('newsletter_email', $request->newsletter_email)
                ->count();
            if ($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                $insertdata = \App\Models\newsletter::create(['newsletter_email' => $request->newsletter_email, 'cookie' => $request->newsletter_mac_id, ]);
                if ($insertdata)
                {
                    echo 'unique';
                }
            }
        }
    }
}
