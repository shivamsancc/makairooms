<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $table = 'mak_partners';
    protected $fillable = ['name', 'email','user_id','phone','address','state','district','pincode','status'];


    public static function getpropertyuser($id){
        $result =self::join('users','users.id','mak_partners.user_id')
        ->select('mak_partners.name','mak_partners.phone')
        ->get();
       return $result;
    }
}
