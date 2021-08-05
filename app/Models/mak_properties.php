<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use state;

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
}
