<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property_img extends Model
{
    protected $table = 'property_imgs';
    protected $fillable = ['img_name', 'alt_name','property_item_id','status'];
}
