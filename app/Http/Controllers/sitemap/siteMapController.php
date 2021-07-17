<?php

namespace App\Http\Controllers\sitemap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=================Include=========
use DB;
use App\Models\sitemap;
//=================Include=========
class siteMapController extends Controller
{
   
    public function index()
    {
        
        $posts= sitemap::where('status',1)->get();  
        return response()->view('sitemap.sitemap',compact('posts'))->header('Content-Type', 'text/xml');
    }

    public function dynamicsitemap($slug){
        $sitemapname= sitemap::where('slug',$slug)->first();
        if ($sitemapname) {
            $model_directry= "\App\\Models";
            $model= $sitemapname->model;
            $value= $sitemapname->value;
            $static= $sitemapname->static;
            $model_name= $model_directry.'\\'.$model;
            if (!empty($sitemapname)) {
             $posts=$model_name::select($value,'created_at')->where('status', 1)->get();
                  return response()->view('sitemap.dynamic',compact('posts','value','static'))->header('Content-Type', 'text/xml');
                }    
        }    
    }
}
