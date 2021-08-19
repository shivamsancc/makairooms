<?php namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class system 
{
      public static  function getmasterdata(){
            $data['ads'] = \App\Models\mk_ads::getValues();
			return $data;
        }


      public static function fileuploader($location,$name,$file,$access_type){
            $filePath = 'upload/'.$location.'/'. $name;
            Storage::disk(env("FILESYSTEM_DRIVER"))->put($filePath, file_get_contents($file) , $access_type);
            return $filePath;
      }

      
      public static function random_strings($length_of_string) 
      { 
          $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
          return substr(str_shuffle($str_result),  0, $length_of_string); 
      }



}
