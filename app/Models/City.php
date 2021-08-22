<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['city_name', 'city_img','city_about', 'count','status'];



    public static function getFooternav(){
      $result=  self::select('*')
        ->where('status',1)
        ->limit(6)
        ->get();
        if (isset($result)) {
           return $result;
        }
        return '';

    }
}
