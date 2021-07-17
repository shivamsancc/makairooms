<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sitemap extends Model
{
    protected $table = 'sitemaps';
    protected $fillable = ['slug', 'model','value','changefreq','priority','type','status'];
}
