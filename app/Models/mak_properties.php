<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use state;
use DB;
class mak_properties extends Model
{
    protected $table = 'mak_properties';
    protected $fillable = ['partner_id','price_range1',
    'price_range2','slug','name','property_type','youtube_link',
    '360_degree_link','about_property','address','state',
    'district','pincode','lat','long','gender','property_features'];





    public static function checkuser($id,$user_id){
       $result= self::where('id',$id)->where('partner_id',$user_id)->first();
        return $result;
    }

    public static function getByID($id){
        $result= self::where('id',$id)->where('status',1)->first();
        return $result;
    }   

    public static function getbylatlong($localities){

        $locality= DB::table("localities")->find($localities);
        $latitude = $locality->lat;
        $longitude = $locality->long;
        $result = \DB::table("mak_properties")
            ->select("mak_properties.id"
                ,\DB::raw("6371 * acos(cos(radians(" . $latitude . ")) 
                * cos(radians(mak_properties.lat)) 
                * cos(radians(mak_properties.long) - radians(" . $longitude . ")) 
                + sin(radians(" .$latitude. ")) 
                * sin(radians(mak_properties.lat))) AS distance")
                )
                // ->groupBy("mak_properties.id")
                ->having('distance', '<', 25)
                ->get();
        return $result;
    }
}
