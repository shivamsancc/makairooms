<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property_features extends Model
{
    protected $table = 'property_features';  
    protected $fillable =['f_name', 'f_text', 'f_icon','status'];
}
