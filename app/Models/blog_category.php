<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class blog_category extends Model
{
    use Sluggable;
    protected $table = 'blog_categories';
    protected $fillable = ['name', 'slug', 'parent_id','status'];



    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
