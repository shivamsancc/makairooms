<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    protected $table = 'queries';
    protected $fillable = ['name','email','phone','query','cookie_id','status'];






    public static function softdelete($id){
        return   $runquery= self::where('id',$id)->update(['status'=>'0']);
    }
}
