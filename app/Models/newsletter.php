<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $table = 'newsletters';  
    protected $fillable =['newsletter_name', 'newsletter_email', 'cookie','user_id','status'];
}
