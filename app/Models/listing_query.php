<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class listing_query extends Model
{
    protected $table = 'listing_queries';
    protected $fillable = ['date_of_visit', 'name', 'email','phone','cookie_id','form_message','status'];
}
