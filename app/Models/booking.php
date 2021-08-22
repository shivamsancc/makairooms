<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['name', 'mobile_no','email', 'address','status','amount','order_id','transaction_id','transaction_status'];


}
