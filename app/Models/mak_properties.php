<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class mak_properties extends Model
{
    protected $table = 'mak_properties';
    protected $fillable = ['partner_id','price_range1',
    'price_range2','slug','name','property_type','youtube_link',
    '360_degree_link','about_property','address','state',
    'district','pincode','lat','long'];
}
