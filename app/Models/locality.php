<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use \Conner\Tagging\Taggable;

class locality extends Model
{
    use Taggable;
    use Sluggable;
    protected $table = 'localities';
    protected $fillable = ['name', 'address', 'state','district','pincode','slug','lat','long','status'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
