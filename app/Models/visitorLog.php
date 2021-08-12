<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitorLog extends Model
{
    protected $table = 'visitor_logs';
    protected $fillable = ['ip', 'userAgent','method','path','cookie_id','parameters','response_code','response_after','created_at','updated_at'];

}
