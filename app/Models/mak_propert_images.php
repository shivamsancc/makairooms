<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class mak_propert_images extends Model
{
    protected $table = 'mak_propert_images';
    protected $fillable = ['img_name', 'alt_name','status','property_id'];
}