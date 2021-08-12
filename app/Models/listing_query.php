<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class listing_query extends Model
{
    protected $table = 'listing_queries';
    protected $fillable = ['date_of_visit', 'name', 'email','phone','property_id','partner_id','cookie_id','form_message','status'];



    public static function softdelete($id){
        return   $runquery= self::where('id',$id)->update(['status'=>'0']);
    }
}
