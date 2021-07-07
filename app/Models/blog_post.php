<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class blog_post extends Model
{
    use Sluggable;
    protected $table = 'blog_posts';
    protected $fillable = ['name', 'slug', 'body','f_image','category','status'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
