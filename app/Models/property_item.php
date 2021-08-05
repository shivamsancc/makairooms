<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property_item extends Model
{
    protected $table = 'property_items';
    protected $fillable = ['partner_id', 'ptoperty_id','property_type','item_name','item_for','item_price','slug','gender','item_features','status'];




    public static function checkuser($id,$user_id){
        $result= self::where('id',$id)->where('partner_id',$user_id)->first();
         return $result;
     }
}
